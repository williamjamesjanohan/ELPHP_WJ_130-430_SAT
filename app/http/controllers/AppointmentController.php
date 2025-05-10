public function store(Request $request)
{
    $request->validate([
        'service_id' => 'required|exists:services,id',
        'appointment_time' => 'required|date|after:now',
    ]);

    $appointment = Appointment::create([
        'user_id' => auth()->id(),
        'service_id' => $request->service_id,
        'appointment_time' => $request->appointment_time,
        'status' => 'pending',
    ]);

    return redirect()->back()->with('success', 'Appointment booked!');
}
