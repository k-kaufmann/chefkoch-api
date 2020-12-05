# Chefkoch.de API

PHP library to access API data from chefkoch.de

## Get started
```PHP
<?php
use chefkoch\ChefkochFactory;

$chefkochFactory = new ChefkochFactory();
$apiClient = $chefkochFactory->createApiClient();

$user = $apiClient->getUserById("INPUT_USER_ID");
```

## Data
Accessible data from the API

### User
* ``id`` type: ``string``
* ``username`` type: ``string``
* ``rank`` type: ``integer``
* ``hasAvatar`` type: ``boolean``
* ``hasPaid`` type: ``boolean``
* ``deleted`` type: ``boolean``