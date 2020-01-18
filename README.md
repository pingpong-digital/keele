# wordpress-template

This is the starting point for WordPress projects. It contains:
- `Docker-compose` file to quickly set up a local development environment using Docker.
- The `wp-sync-db` plugin, to sync databse between local environment, staging and production servers.

`Dockerfile`s are for automatic building and deploying to servers:

`Dockerfile` being the main building setting, it uses the official WordPress image.
`aliyun.Dockerfile` uses Aliyun Mirror for `apt-get` sources.
`pingpong.Dockerfile` uses our custom built WordPress image (with sendmail built in).

When using `Dockerfile` or `aliyun.Dockerfile`, `localhost.localdomain` should be replaced with domain of the website.