$cwd = (Get-Location).Path
$possible1 = Join-Path $cwd 'ci4/app/Views/pages'
$possible2 = Join-Path (Split-Path $cwd -Parent) 'ci4/app/Views/pages'
if (Test-Path $possible1) { $pagesDir = $possible1 } elseif (Test-Path $possible2) { $pagesDir = $possible2 } else { Write-Error "Pages folder not found"; exit 1 }
Get-ChildItem $pagesDir -Filter *.php | ForEach-Object {
    $path = $_.FullName
    $c = Get-Content $path -Raw
    $orig = $c
    # Replace literal backtick + n (\`n) with actual newline
    $c = [regex]::Replace($c, '\x60n', [Environment]::NewLine)
    # Fix removed $this in endSection
    $c = $c -replace '->endSection\(\)', '\$this->endSection()'

    if ($c -ne $orig) {
        Set-Content -Path $path -Value $c -Encoding UTF8
        Write-Output ("Cleaned {0}" -f $_.Name)
    } else {
        Write-Output ("No changes for {0}" -f $_.Name)
    }
}
