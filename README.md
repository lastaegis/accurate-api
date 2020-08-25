# Table of Contents

* [Installation](#installation)

<a name="installation"></a>
# Installation
## Prerequisites
- PHP version 5.6, 7.0, 7.1, 7.2, 7.3, or 7.4
- Accurate ClientID and Client Secret (https://account.accurate.id/developer)
## Setup Environment Variables
1. Copy the sample env file to a new file named `.env`
```bash
cp .env.sample .env
```

## Install Package

Require this package inside your composer.json

```json
{
  "require": {
    "sawala/accurate-api": "dev-master"
  }
}
```