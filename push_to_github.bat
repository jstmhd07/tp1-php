@echo off
chcp 65001 >nul
title Publication automatique sur GitHub

echo ====================================================
echo      PUBLICATION AUTOMATIQUE DU TP SUR GITHUB
echo ====================================================
echo.

cd /d "%~dp0"

:: 1. Initialiser le depot git local s'il n'existe pas encore
if not exist ".git" (
    echo [1/4] Initialisation du repertoire Git local...
    git init -b main
) else (
    echo [1/4] Repertoire Git local deja initialise.
)

:: 2. Ajouter tous les fichiers du TP
echo [2/4] Ajout des fichiers...
git add .

:: 3. Creer le commit
echo [3/4] Creation du commit...
git commit -m "TP 1 PHP : Structures de controle et boucles"

:: 4. Verifier si le remote GitHub est deja configure
git remote get-url origin >nul 2>&1
if %ERRORLEVEL% NEQ 0 (
    echo.
    echo ====================================================
    echo Le depot GitHub distant n'est pas encore relie.
    echo 1. Creez un depot vide sur : https://github.com/new
    echo 2. Copiez l'adresse URL HTTPS de votre depot.
    echo ====================================================
    echo.
    set /p REPO_URL="Collez ici l'URL HTTPS de votre depot GitHub : "
    git remote add origin %REPO_URL%
    git branch -M main
)

:: 5. Pousser vers GitHub
echo.
echo [4/4] Envoi vers GitHub (Push)...
git push -u origin main

if %ERRORLEVEL% EQU 0 (
    echo.
    echo ====================================================
    echo   SUCCES ! Votre TP est en ligne sur GitHub !
    echo ====================================================
) else (
    echo.
    echo ====================================================
    echo   Une erreur est survenue lors du push.
    echo   Verifiez que votre depot GitHub existe et que
    echo   vous etes bien connecte avec vos identifiants.
    echo ====================================================
)

echo.
pause

