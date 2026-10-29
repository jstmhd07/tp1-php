@echo off
chcp 65001 >nul
title Publication automatique sur GitHub

echo ==========================================================
echo      PUBLICATION SUR VOTRE COMPTE GITHUB (jstmhd07)
echo ==========================================================
echo.

cd /d "%~dp0"

:: 1. Initialiser le depot git local si necessaire
if not exist ".git" (
    echo [1/3] Initialisation du repertoire Git local...
    git init -b main
) else (
    echo [1/3] Depot Git deja initialise.
)

:: 2. Ajouter tous les fichiers et faire le commit
echo [2/3] Sauvegarde des fichiers du TP...
git add .
git commit -m "TP 1 PHP : Structures de controle et boucles" >nul 2>&1

:: 3. Verifier si le depot GitHub existe deja en ligne
git remote get-url origin >nul 2>&1
if %ERRORLEVEL% EQU 0 (
    echo [3/3] Envoi des mises a jour vers GitHub...
    git push -u origin main
) else (
    echo [3/3] Creation automatique du depot GitHub 'tp1-php' et envoi...
    "C:\Program Files\GitHub CLI\gh.exe" repo create tp1-php --public --source=. --remote=origin --push
)

echo.
echo ==========================================================
echo   SUCCES ! Votre TP est disponible sur votre GitHub :
echo   👉 https://github.com/jstmhd07/tp1-php
echo ==========================================================
echo.
pause

