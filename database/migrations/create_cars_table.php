Schema::create('cars', function (Blueprint $table) {
    $table->id();
    $table->string('model');
    $table->string('make');
    $table->integer('year');
    $table->decimal('price_per_day', 8, 2);
    $table->integer('seating_capacity');
    $table->timestamps();
});
