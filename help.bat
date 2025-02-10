@echo off
REM Initialize Git repository
git init
git remote add origin https://github.com/GEORJIE124/LUMBACA_RI_130SAT_PHP

REM Define branch names and loop through them
for %%B in (
    0210_2_2-create-and-load-a-view_lab
    0210_3_3-create-the-obligatory-three-page-layout-using-layout-files_lab
    0210_4_4-make-it-pretty-using-tailwindcss_lab
    0210_5_5-set-the-active-navigation-link_lab
    0210_6_6-pass-data-to-views_lab
    0210_7_7-models_lab
) do (
    echo Creating and switching to branch: %%B
    git checkout -b %%B

    echo Adding and committing: %%B
    git add .
    git commit -m "First commit for %%B"

    echo Pushing branch %%B to remote...
    git push -u origin %%B
)

echo 🎉 All branches pushed successfully!
pause
