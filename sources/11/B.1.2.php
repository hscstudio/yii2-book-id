	public function up()
    {        
        $this->createTable('student', [
            'id' => $this->primaryKey(),
            'name' => $this->string(50)->notNull(),
            'code' => $this->string(15)->notNull()->unique(),
            'gender' => $this->boolean()->notNull()->defaultValue(1),
            'age' => $this->integer(3),
            'address' => $this->text(),
        ]);
    }

    public function down()
    {
        echo "m160112_231852_create_student_table can't be reverted.\n";
        $this->dropTable('student');
        return false;
    }
