[
    // a1 needs to be unique in the column represented by the "a1" attribute
    ['a1', 'unique'],
    // a1 needs to be unique, but column a2 will be used to check the uniqueness of the a1 value
    ['a1', 'unique', 'targetAttribute' => 'a2'],
    // a1 and a2 need to be unique together, and they both will receive error message
    [['a1', 'a2'], 'unique', 'targetAttribute' => ['a1', 'a2']],
    // a1 and a2 need to be unique together, only a1 will receive error message
    ['a1', 'unique', 'targetAttribute' => ['a1', 'a2']],
    // a1 needs to be unique by checking the uniqueness of both a2 and a3 (using a1 value)
    ['a1', 'unique', 'targetAttribute' => ['a2', 'a1' => 'a3']],
]
