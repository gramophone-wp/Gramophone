echo "Copying dir"
rm -rf dist/
cp -R . ./../stage
mv ../stage ./gramophone

declare -a remove_files=(
  ".git"
  "docker-compose.yml"
  "README.md"
  "eject.sh"
)

echo "Removing files."
for file in "${remove_files[@]}"
do
  echo "Removing $file"
  rm -rf "./gramophone/$file"
done

echo "Making the theme"
mkdir dist
zip dist/gramophone.zip ./gramophone/*
rm -rf ./gramophone
