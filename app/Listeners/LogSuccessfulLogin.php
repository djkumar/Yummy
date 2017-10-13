public function handle(Login $event)
{
    LoginActivity::create([
        'user_id'       =>  $event->user->id,
        'user_agent'    =>  \Illuminate\Support\Facades\Request::header('User-Agent'),
        'ip_address'    =>  \Illuminate\Support\Facades\Request::ip()
    ]);
}