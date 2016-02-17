$this->createTable('employee', [
    'id' => $this->string(15)->notNull(),
    'name' => $this->string(50)->notNull(),
    'age' => $this->integer(3)->notNull(),
    'PRIMARY KEY(id)',
],$tableOptions);
