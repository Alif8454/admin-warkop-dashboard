$cwd=(Get-Location).Path
$p1=Join-Path $cwd 'ci4/app/Views/pages'
$p2=Join-Path (Split-Path $cwd -Parent) 'ci4/app/Views/pages'
if (Test-Path $p1) { $pagesDir=$p1 } elseif (Test-Path $p2) { $pagesDir=$p2 } else { Write-Error 'pages folder not found'; exit 1 }
Get-ChildItem $pagesDir -Filter *.php | ForEach-Object {
    $path = $_.FullName
    $s = Get-Content $path -Raw
    $orig = $s
    # remove first opening <main ...>
    $s = [regex]::Replace($s, '<main[^>]*>', '', 'Singleline', 1)
    # remove last closing </main>
    $last = $s.LastIndexOf('</main>')
    if ($last -ge 0) { $s = $s.Remove($last, 7) }
    if ($s -ne $orig) { Set-Content -Path $path -Value $s -Encoding UTF8; Write-Output "Stripped main tags in $($_.Name)" } else { Write-Output "No change for $($_.Name)" }
}
