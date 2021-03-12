# Chefkoch.de API

---

PHP library to access API data from chefkoch.de

---

## Get started
```PHP
<?php
use chefkoch\ChefkochFactory;

$chefkochFactory = new ChefkochFactory();
$apiClient = $chefkochFactory->createApiClient();

$user = $apiClient->getUserById("INPUT_USER_ID");
$simpleRecipes = $apiClient->getRecipes("OFFSET");
```

---

## Data
Accessible data from the API

### User
* ``id`` type: ``string``
* ``username`` type: ``string``
* ``rank`` type: ``integer``
* ``hasAvatar`` type: ``boolean``
* ``hasPaid`` type: ``boolean``
* ``deleted`` type: ``boolean``

### SimpleRecipe (for requests to get a list of recipes)
* ``id`` type: ``string``
* `type` type: `int`
* `title` type: `string`
* `subtitle` type: `string`
* `owner` type: `array`
* `rating` type: `array`
* `difficulty` type: `int`
* `hasImage` type: `bool`
* `hasVideo` type: `bool`
* `previewImageId` type: `?string`
* `preparationTime` type: `int`
* `isSubmitted` type: `bool`
* `isRejected` type: `bool`
* `imageCount` type: `int`
* `createdAt` type: `DateTime`
* `editor` type `?string`
* `submissionDate` type: `?DateTime`
* `isPremium` type: `bool`
* `status` type: `int`
* `siteUrl` type: `string`
