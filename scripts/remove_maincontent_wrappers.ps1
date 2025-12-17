$cwd=(Get-Location).Path
$p1=Join-Path $cwd 'ci4/app/Views/pages'
$p2=Join-Path (Split-Path $cwd -Parent) 'ci4/app/Views/pages'
if (Test-Path $p1) { $pagesDir=$p1 } elseif (Test-Path $p2) { $pagesDir=$p2 } else { Write-Error 'pages folder not found'; exit 1 }
Get-ChildItem $pagesDir -Filter *.php | ForEach-Object {
    $path = $_.FullName
    $s = Get-Content $path -Raw
    $orig = $s
    $openIdx = $s.IndexOf("<div id='mainContent'>")
    if ($openIdx -lt 0) { $openIdx = $s.IndexOf('<div id="mainContent">') }
    if ($openIdx -ge 0) {
        # find end of content (first occurrence of section scripts or endSection after content)
        $endIdx = $s.IndexOf('<?php $this->section("scripts")')
        if ($endIdx -lt 0) { $endIdx = $s.IndexOf('<?php $this->endSection()') }
        if ($endIdx -gt -1) {
            $before = $s.Substring(0, $endIdx)
            $lastClose = $before.LastIndexOf('</div>')
            if ($lastClose -ge $openIdx) {
                # remove the matched closing tag and the opening tag
                $s = $s.Remove($lastClose, 6) # remove closing
                $lenOpen = "<div id='mainContent'>".Length
                if ($s.IndexOf("<div id='mainContent'>") -eq $openIdx) { $s = $s.Remove($openIdx, $lenOpen) }
                else { # try double-quoted length
                    $lenOpen = '<div id="mainContent">'.Length
                    if ($s.IndexOf('<div id="mainContent">') -eq $openIdx) { $s = $s.Remove($openIdx, $lenOpen) }
                }
            } else {
                Write-Output ("Could not find matching close for $($_.Name)")
            }
        } else {
            Write-Output ("No end marker for $($_.Name), skipping")
        }
    }

    if ($s -ne $orig) {
        Set-Content -Path $path -Value $s -Encoding UTF8
        Write-Output "Cleaned wrapper in $($_.Name)"
    } else {
        Write-Output "No change for $($_.Name)"
    }
}
