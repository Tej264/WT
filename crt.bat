@echo off
for /L %%i in (1,1,60) do (
    mkdir q%%i
)
echo Folders created successfully.
