@echo off
cd /d %dp0
taskkill /f /t /im filewatch.exe
start /min filewatch /m /k "echo off&chcp 65001&cd nodejs&node filewatch.js"
chcp 65001
mode con cols=120 lines=50
call "E:\Program Files (x86)\Microsoft Visual Studio 14.0\VC\vcvarsall.bat" x86
:start
cd /d %~dp0
rem cls
call php main.php
if "%ERRORLEVEL%"=="1" taskkill /f /t /im filewatch.exe&exit
goto start