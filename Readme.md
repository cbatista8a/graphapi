# GraphAPI Module for PrestaShop

[![Release Builder](https://github.com/cbatista8a/graphapi/actions/workflows/release_builder.yml/badge.svg)](https://github.com/cbatista8a/graphapi/actions/workflows/release_builder.yml)

## Overview

The GraphAPI module for PrestaShop is a powerful tool that enables dynamic GraphQL-based access to your PrestaShop store's resources. This module allows clients to query and retrieve only the data they need, optimizing performance and providing a flexible API for your e-commerce platform.

## Features

- **GraphQL Integration:** Implement GraphQL to provide efficient and flexible access to PrestaShop resources.
- **Dynamic Queries:** Clients can craft queries to request specific data, reducing overhead.
- **Exception Handling:** Robust error handling to ensure smooth operation even in case of query errors.
- **Performance Metrics:** Monitor and optimize performance with built-in timing measurements.

## Getting Started

### Prerequisites

Before using this module, ensure you have the following prerequisites installed:

- [PrestaShop](https://prestashop.com/versions/) (min version 1.7)
- [Composer](https://getcomposer.org/)
- [ChromeiQL - Chrome extension for the GraphiQL tool](https://chrome.google.com/webstore/detail/chromeiql/fkkiamalmpiidkljmicmjfbieiclmeij) (not included with PrestaShop, this is optional: maybe you use another client to interrogate the GraphQL API and it is also perfectly valid.)

### Installation

1. Clone this repository to your PrestaShop modules directory:

   ```bash
   git clone https://github.com/cbatista8a/graphapi.git modules/graphapi
   cd modules/graphapi
   composer install
   ```
2. After `composer install` you need to do some tricks for avoid errors caused for namespace collisions between this module and Prestashop dependencies.
   ```bash
   composer prefix-namespace
   composer clean
   composer build
   composer install --no-dev
   ```
   
3. Navigate to your PrestaShop admin panel and go to Modules and Services.
4. Find the "GraphAPI" module and click "Install."

### Usage

1. Configure your ChromeiQL client and set your endpoint e.g., http://yourstore.com/graph-api
2. Make requests to the module's endpoint, , with your GraphQL query as the request body.
3. Example GraphQL query:

```graphql
{
  categories {
    id
    localizedFields(id_lang:1) {
      name
    }
    parent {
      id
      localizedFields(id_lang:1) {
        name
      }
    }
  }
}
```
### Performance Monitoring

You can monitor the performance of your GraphAPI requests by inspecting the response's `performance` object (when Debug mode or profiling are enabled), which includes timing information.

### License

This project is licensed under the Apache 2.0 License - see the [LICENSE](./LICENSE.md) file for details.

### Contributing

Thank you for considering contributing to this project! To get started, follow these steps:

1. Fork the repository on GitHub.
2. Create a branch for your feature or bug fix.
3. Make your changes and commit them with clear commit messages.
4. Push your changes to your fork.
5. Create a pull request to the `master` branch of this repository.
   
### Contact

If you have any questions or need further assistance, feel free to reach out to the project maintainer:

Author: Carlos Batista | [CubaDevOps](https://cubadevops.com) Founder

Email: carlos.batista@cubadevops.com

### Acknowledgments

[PrestaShop](https://www.prestashop.com/) - The e-commerce platform used as the foundation for this module.

[Hacktoberfest](https://hacktoberfest.digitalocean.com/) - for celebrating open source contributions every October and inspiring me to open this private repository to the community.

We appreciate your interest in contributing to open source and hope you find this module useful!
