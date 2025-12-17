$cwd=(Get-Location).Path
$p1=Join-Path $cwd 'ci4/app/Views/pages'
$p2=Join-Path (Split-Path $cwd -Parent) 'ci4/app/Views/pages'
if (Test-Path $p1) { $pagesDir=$p1 } elseif (Test-Path $p2) { $pagesDir=$p2 } else { Write-Error 'pages folder not found'; exit 1 }
Get-ChildItem $pagesDir -Filter *.php | ForEach-Object {
    $path = $_.FullName
    $s = Get-Content $path -Raw
    $new = $s.Replace('\$this->endSection()', '$this->endSection()')
    if ($new -ne $s) { Set-Content -Path $path -Value $new -Encoding UTF8; Write-Output "Fixed $($_.Name)" } else { Write-Output "No change for $($_.Name)" }
}
