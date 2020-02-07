<?php

declare(strict_types=1);

namespace Hostelry\Site\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\DemoRequest as MailDemoRequest;

final class DemoRequest extends Controller
{
    public function __invoke(Request $request) : RedirectResponse
    {
        $info['businesses'] = $request->post('businesses');
        $info['employees'] = $request->post('employees');
        $info['operating'] = $request->post('operating');

        Mail::to("sales@codingmatters.today")
            ->send(new MailDemoRequest(
                $request->post('name'),
                $request->post('email'),
                $request->post('number'),
                $info,
                $request->post('message')
            ));

        return redirect()->route('site.index');
    }
}
