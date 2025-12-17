# Refactor views to use a shared layout
$cwd = (Get-Location).Path
$possible1 = Join-Path $cwd 'ci4/app/Views/pages/index.php'
$possible2 = Join-Path (Split-Path $cwd -Parent) 'ci4/app/Views/pages/index.php'
if (Test-Path $possible1) { $indexPath = $possible1 } elseif (Test-Path $possible2) { $indexPath = $possible2 } else { Write-Error "Missing index.php in expected locations"; exit 1 }
$index = Get-Content $indexPath -Raw
$mainOpen = $index.IndexOf('<main')
if ($mainOpen -lt 0) { Write-Error 'no <main> tag found in index.php'; exit 1 }
$beforeMain = $index.Substring(0,$mainOpen)
$footerIdx = $index.IndexOf('<!-- ### $App Screen Footer ### -->')
if ($footerIdx -lt 0) { $footerIdx = $index.IndexOf('<footer') }
if ($footerIdx -lt 0) { Write-Error 'no footer found in index.php'; exit 1 }
$footerPart = $index.Substring($footerIdx)
# remove script tags from footer for placement in layout's scripts section
$footerWithoutScripts = [regex]::Replace($footerPart,'<script[^>]*>.*?</script>','', 'Singleline')

# build layout content
$renderContent = '<?= $this->renderSection("content") ?>'
$renderScripts = '<?= $this->renderSection("scripts") ?>'
$mainWrapper = "<main class='main-content bgc-grey-100'>`n  <div id='mainContent'>`n    $renderContent`n  </div>`n</main>`n"
$layoutContent = $beforeMain + $mainWrapper + $footerWithoutScripts + "`n" + $renderScripts + "`n"

$layoutDir = 'ci4/app/Views/layouts'
if (-not (Test-Path $layoutDir)) { New-Item -Path $layoutDir -ItemType Directory | Out-Null }
Set-Content -Path (Join-Path $layoutDir 'main.php') -Value $layoutContent -Encoding UTF8
Write-Output "Created layout: $layoutDir\main.php"

# Refactor all pages
$pagesDir = Split-Path $indexPath -Parent
Get-ChildItem $pagesDir -Filter *.php | ForEach-Object {
    $file = $_.FullName
    $c = Get-Content $file -Raw
    if ($c.IndexOf('<main') -lt 0 -or $c.IndexOf('</main>') -lt 0) {
        Write-Warning "Skipping $($_.Name): no <main>...</main> found"
        return
    }
    $mStart = $c.IndexOf('<main')
    $mEnd = $c.IndexOf('</main>') + 7
    $main = $c.Substring($mStart, $mEnd - $mStart)
    # capture any modals/content between </main> and footer
    $after = $c.Substring($mEnd)
    $footerLocalIdx = $after.IndexOf('<!-- ### $App Screen Footer ### -->')
    if ($footerLocalIdx -lt 0) { $footerLocalIdx = $after.IndexOf('<footer') }
    if ($footerLocalIdx -ge 0) { $modals = $after.Substring(0,$footerLocalIdx) } else { $modals = $after }
    $main = $main + "`n" + $modals
    $scripts = ''
    [regex]::Matches($c,'<script[^>]*>.*?</script>','Singleline') | ForEach-Object { $scripts += $_.Value + "`n" }

    $new = '<?php $this->extend("layouts/main") ?>`n<?php $this->section("content") ?>`n' + $main + "`n<?php $this->endSection() ?>`n"
    if ($scripts -ne '') { $new += '<?php $this->section("scripts") ?>`n' + $scripts + "`n<?php $this->endSection() ?>`n" }
    Set-Content -Path $file -Value $new -Encoding UTF8
    Write-Output "Refactored $($_.Name)"
}
