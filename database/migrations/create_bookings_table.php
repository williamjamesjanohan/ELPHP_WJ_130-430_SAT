Schema::create('bookings', function (Blueprint $table) {
    $table->id();
    $table->foreignId('user_id')->constrained()->onDelete('cascade');
    $table->foreignId('car_id')->constrained()->onDelete('cascade');
    $table->timestamp('pickup_date');
    $table->timestamp('return_date');
    $table->enum('status', ['pending', 'confirmed', 'completed', 'cancelled'])->default('pending');
    $table->timestamps();
});
