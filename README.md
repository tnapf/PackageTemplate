# PackageTemplate
A template repository for making composer packages

## What's Included

- [PHPUnit](https://phpunit.de/)
- [PHP CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer)
- GitHub Actions
- Composer Commands
  - `composer phpunit` - Run PHPUnit tests
  - `composer phpunit-coverage` - Run PHPUnit tests with coverage
  - `composer cs` - Run PHP CodeSniffer
  - `composer csf` - Run PHP CodeSniffer and fix errors

## How to set up?

1. Clone this repository and remove the `.git` folder
2. Update the `README.md` file
3. Update the `composer.json` file
4. Update the `LICENSE` file
5. Update the `phpunit.xml` file
6. Run `composer install`
7. Run `git init` to initialize a new git repository
8. Run `git add .` to add all files to the repository
9. Run `git commit -m "initial commit"` to commit the files
10. Run `git branch -M main` to rename the current branch to `main`
11. Create a new repository on GitHub
12. Run `git remote add origin https://github.com/tnapf/<Package>.git` to add the new repository as remote
13. Run `git push -u origin main` to push the files to the new repository
