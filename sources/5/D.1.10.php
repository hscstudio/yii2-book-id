[
    // checks if "primaryImage" is an uploaded image file in PNG, JPG or
    // GIF format.
    // the file size must be less than 1MB
    ['primaryImage', 'file', 'extensions' => ['png', 'jpg', 'gif'], 'maxSize' => 1024*1024],
]
