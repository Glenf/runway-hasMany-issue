# Runway hasMany update issue

```
git clone git@github.com:Glenf/runway-hasMany-issue.git
cd runway-hasMany-issue
composer install
cp .env.example .env
php artisan key:generate
# setup db in your .env
php artisan migrate
php artisan db:seed
```

## Steps to reproduce

1. Open Statamic CP
2. Click 'Parents' in the sidebar
3. Select a parent
4. Select a child under the parent
5. Click 'Save' on child
