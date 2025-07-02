# Laravel Backend Agent Guide

## Commands
- **Test**: `composer test` (runs all tests), `php artisan test --filter=TestName` (single test)
- **Code Style**: `./vendor/bin/pint` (Laravel Pint for formatting)
- **Dev**: `composer run dev` (starts server, queue, logs, and vite)
- **Build**: `npm run build` (builds frontend assets)
- **Serve**: `php artisan serve` (development server)

## Architecture
- **Framework**: Laravel 12 with PHP 8.2+
- **Database**: SQLite (database/database.sqlite)
- **Frontend**: Vite with TailwindCSS
- **Testing**: PHPUnit with Feature/Unit test separation
- **Models**: Employee, Customer, Category, User, Sale, SaleItem, Role, Product, Inventory

## Code Style
- **PSR-4** autoloading: `App\` namespace for app directory
- **Eloquent models**: Singular PascalCase (User, Product), use `HasFactory` trait
- **Relationships**: Use camelCase method names (`role()`, `belongsTo()`)
- **Properties**: Use `$fillable`, `$hidden`, `casts()` method for attributes
- **DocBlocks**: Use proper type hints (`@var list<string>`, `@return array<string, string>`)
- **Imports**: Group by type (Laravel classes first, then app classes)
