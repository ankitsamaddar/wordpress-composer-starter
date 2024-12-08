# WP-Starter: A Modern WordPress Starter with Composer

WP-Starter simplifies WordPress development by using Composer for package and dependency management. Composer allows to easily update WordPress plugins with semantic versioning (SemVer) and manage .org plugins via `composer`. It keeps development environment consistent and maintainable.🚀

## Features ✨

- **Composer Integration**: Manage WordPress core, themes, and plugins as dependencies.
- **Semantic Versioning**: Keep plugins updated with strict version control.\
- **Custom Scripts**: Automate salts reset and project cleanup.

## Project Structure

Here's how the project is organized:

```plaintext
├── .env.example                  # Example environment configuration file
├── .gitignore                    # Files and directories to ignore in Git
├── composer.json                 # Composer dependencies and scripts
├── LICENSE                       # License information
├── public
│   ├── index.php                 # Main entry point
│   ├── wp-config.php             # WordPress configuration file
│   ├── wp-content                # WordPress content directory
│   │   └── index.php             # Placeholder file
│   └── wp-uploads                # WordPress uploads directory
│       └── index.php             # Placeholder file
└── README.md                     # Project documentation
```

## Getting Started 🚀

### Prerequisites

Ensure you have the following installed:

- [Composer](https://getcomposer.org/) (Dependency Manager for PHP)
- PHP >= 8.0

### Installation

1. Add the WP-Starter template to your Composer global config:

   ```bash
   composer config --global repositories.wp-starter vcs https://github.com/ankitsamaddar/wp-starter.git
   ```

2. Create your WordPress project using the starter:

   ```bash
   composer create-project --remove-vcs ankitsamaddar/wp-starter <your-project-name>
   ```

3. Navigate to your project directory:

   ```bash
   cd <your-project-name>
   ```

### With [Local](https://localwp.com/) by Flywheel

- Install [Local](https://localwp.com/).

  ```powershell
  winget install --id Flywheel.Local
  ```

- Create a new WordPress site using the UI
- Navigate to the site's `app` directory in the terminal.
- Run `rm -rf public` to delete the `public` directory.
- Now install WordPress using:

  ```powershell
  composer create-project ankitsamaddar/wp-starter public
  ```

- Click the link in Local UI to visit the site in the browser.

### Configuration

Open up the `.env` file to edit database credentials or other WordPress constants.

## Custom Scripts 🛠️

WP-Starter comes with handy Composer scripts:

### 1. Reset Authentication Salts

Reset your WordPress salts securely:

```bash
composer run reset-salts
```

### 2. Reset the Project (Caution! ⚠️)

This will remove all customizations and reset the project:

```bash
composer run reset
```

**Warning**: All your progress and customizations will be lost. To reinstall after a reset, use:

```bash
composer install
```

---

## Contributing 🤝

Contributions are welcome! Please fork the repository, create a feature branch, and submit a pull request.

## License 📜

This project is licensed under the GPL-3.0 License. See the [LICENSE](./LICENSE) file for details.

## Support 💬

Have questions or need help? Create an issue in the [GitHub repository](https://github.com/ankitsamaddar/wp-starter/issues).
