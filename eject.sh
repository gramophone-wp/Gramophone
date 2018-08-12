echo "Copying dir"
rm -rf dist/
cp -R . ./../stage
mv ../stage ./gramophone

declare -a remove_files=(
  ".DS_STORE"
  ".git"
  ".github"
  ".gitignore"
  ".editorconfig"
  "docker-compose.yml"
  "README.md"
  "eject.sh"
  "dist/"
  ".travis.yml"
  ".jscsrc"
)

echo "Removing files."
for file in "${remove_files[@]}"
do
  echo "Removing $file"
  rm -rf "./gramophone/$file"
done

echo "[`date`] Making the theme"
mkdir dist
zip dist/gramophone.zip ./gramophone/*
rm -rf ./gramophone
