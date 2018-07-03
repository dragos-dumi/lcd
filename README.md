# Local Community Distribution

We want to provide a distribution for a local Drupal community or association so we have a streamlined tool for making the awesome local communities without reinventing the wheel. We are in the mids of joining efforts in different countries like Germany, Switzerland and the Netherlands and are eager to integrate the local user groups.

This project should not only provide code but should also be a base for coordinating shared efforts in non-code tasks, like writing content, gathering information ...


# Developer notes

Install the profile using `drush` using the command below. This will **DELETE** the current database and reinstall a clean Drupal instance with the `lcd` profile as default.

```bash
drush site-install --db-url=mysql://root:root@localhost:3306/lcd --account-name=admin --account-pass=password --account-mail=root@localhost lcd
```
 

