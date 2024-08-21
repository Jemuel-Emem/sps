use App\Http\Middleware\admin;
use App\Http\Middleware\user;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Show the login view when the root URL is accessed
Route::view('/', 'login')->name('login');

// Dashboard Route - Redirect based on user role (admin or regular user)
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        if (Auth::user()->is_admin == 1) {
            return redirect()->route('Admindashboard');
        } else {
            return redirect()->route('user-dashboard');
        }
    })->name('dashboard');
});

// Admin Routes
Route::prefix('admin')->middleware(['auth', admin::class])->group(function () {
    Route::get('/Admindashboard', function () {
        return view('admin.index');
    })->name('Admindashboard');

    Route::get('/Appointments', function () {
        return view('admin.appointments');
    })->name('apps');

    Route::post('/logout', function () {
        Auth::logout();
        return redirect()->route('login');
    })->name('logouts');
});

// User Routes
Route::prefix('user')->middleware(['auth', user::class])->group(function () {
    Route::get('/dashboard', function () {
        return view('user.index');
    })->name('user-dashboard');

    Route::get('/appointment', function () {
        return view('user.appointment');
    })->name('appointment');

    Route::post('/logout', function () {
        Auth::logout();
        return redirect()->route('login');
    })->name('logout');
});

// Profile Route
Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
