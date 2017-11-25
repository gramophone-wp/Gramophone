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
for i in "${remove_files[@]}"
do
  echo "Removing $i"
  rm -rf "./gramophone/$i"
done

echo "Making the theme"
mkdir dist
zip dist/gramophone.zip ./gramophone/*
rm -rf ./gramophone
