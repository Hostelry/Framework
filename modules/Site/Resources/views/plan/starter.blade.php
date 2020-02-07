<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,400i,600,600i,700&display=swap" rel="stylesheet">
    <title>Pricing {{config('app.name')}} - Managing Inns, Pension House, and Hotels made easy.</title>
</head>
<body class="font-custom min-h-screen">
<form class="bg-white shadow-xl mb-4 flex flex-wrap justify-center" action="{{route('site.pricing.starter.registration')}}" method="POST">
    @csrf
    <div class="w-full md:w-1/3 sm:w-1/2 p-6 text-white">
        <table class="full-width">
            <thead>
            <tr>
                <td>Features</td>
                <td>Settings</td>
            </tr>
            </thead>
            <tbody>
            <tr class="feature-header">
                <td class="bg-green-900 text-white uppercase p-1" colspan="2">Business Information</td>
            </tr>
            <tr>
                <td class="text-gray-700">Business Name</td>
                <td class="text-gray-700 text-center">1</td>
            </tr>
            <tr class="feature-header">
                <td class="bg-green-700 text-white px-6" colspan="2">Branch Management</td>
            </tr>
            <tr>
                <td class="text-gray-700">Default Branch</td>
                <td class="text-center">
                    <input class="text-center" type="checkbox" checked required disabled>
                </td>
            </tr>
            <tr>
                <td class="text-gray-700">Add New Location</td>
                <td class="text-center">
                    <input class="text-center" type="checkbox" name="can_add_new_location">
                </td>
            </tr>
            <tr class="feature-header">
                <td class="bg-green-900 text-white uppercase p-1" colspan="2">Room Management</td>
            </tr>
            <tr class="feature-header">
                <td class="bg-green-700 text-white px-6" colspan="2">Setting Room</td>
            </tr>
            <tr>
                <td class="text-gray-700">Allocating Linen</td>
                <td class="text-center">
                    <input class="text-center" type="checkbox" checked required disabled>
                </td>
            </tr>
            <tr>
                <td class="text-gray-700">Allocating Appliance</td>
                <td class="text-center">
                    <input class="text-center" type="checkbox" checked required disabled>
                </td>
            </tr>
            <tr class="feature-header">
                <td class="bg-green-900 text-white uppercase p-1" colspan="2">Booking Management</td>
            </tr>
            <tr class="feature-header">
                <td class="bg-green-700 text-white px-6" colspan="2">Check-In Process</td>
            </tr>
            <tr>
                <td class="text-gray-700">Regular Rate</td>
                <td class="text-center">
                    <input class="text-center" type="checkbox" checked required disabled>
                </td>
            </tr>
            <tr>
                <td class="text-gray-700">With Senior Citizen Discount</td>
                <td class="text-center">
                    <input class="text-center" type="checkbox" checked required disabled>
                </td>
            </tr>
            <tr>
                <td class="text-gray-700">With Custom Discount</td>
                <td class="text-center">
                    <input class="text-center" type="checkbox" name="has_custom_discount">
                </td>
            </tr>
            <tr class="feature-header">
                <td class="bg-green-700 text-white px-6" colspan="2">Check-Out Process</td>
            </tr>
            <tr>
                <td class="text-gray-700">Normal Checkout</td>
                <td class="text-center">
                    <input class="text-center" type="checkbox" checked required disabled>
                </td>
            </tr>
            <tr>
                <td class="text-gray-700">With Penalties/Damages Incurred</td>
                <td class="text-center">
                    <input class="text-center" type="checkbox" checked required disabled>
                </td>
            </tr>
            <tr class="feature-header">
                <td class="bg-green-700 text-white px-6" colspan="2">Transfer Process</td>
            </tr>
            <tr>
                <td class="text-gray-700">Upgrade Room/Duration</td>
                <td class="text-center">
                    <input class="text-center" type="checkbox" checked required disabled>
                </td>
            </tr>
            <tr>
                <td class="text-gray-700">With Malfunction Appliance/Utilities</td>
                <td class="text-center">
                    <input class="text-center" type="checkbox" checked required disabled>
                </td>
            </tr>
            <tr class="feature-header">
                <td class="bg-green-700 text-white px-6" colspan="2">Order Process</td>
            </tr>
            <tr>
                <td class="text-gray-700">Accepts order during checking</td>
                <td class="text-center">
                    <input class="text-center" type="checkbox" checked required disabled>
                </td>
            </tr>
            <tr>
                <td class="text-gray-700">Additional order while check-in</td>
                <td class="text-center">
                    <input class="text-center" type="checkbox" checked required disabled>
                </td>
            </tr>
            <tr>
                <td class="text-gray-700">Additional order during check-out</td>
                <td class="text-center">
                    <input class="text-center" type="checkbox" checked required disabled>
                </td>
            </tr>
            <tr class="feature-header">
                <td class="bg-green-900 text-white uppercase p-1" colspan="2">Employee Management</td>
            </tr>
            <tr>
                <td class="text-gray-700">Total Active Employee</td>
                <td class="text-gray-700 text-center">10</td>
            </tr>
            <tr>
                <td class="text-gray-700">Register New Employee</td>
                <td class="text-center">
                    <input class="text-center" type="checkbox" checked required disabled>
                </td>
            </tr>
            <tr>
                <td class="text-gray-700">Terminate Employee</td>
                <td class="text-center">
                    <input class="text-center" type="checkbox" checked required disabled>
                </td>
            </tr>
            <tr>
                <td class="text-gray-700">Update Employment Status</td>
                <td class="text-center">
                    <input class="text-center" type="checkbox" checked required disabled>
                </td>
            </tr>
            <tr>
                <td class="text-gray-700">Update Role/Position</td>
                <td class="text-center">
                    <input class="text-center" type="checkbox" checked required disabled>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="w-full md:w-2/3 sm:w-1/2 bg-green-700 p-5">
        <fieldset>
            <legend class="uppercase text-gray-100">Business Information</legend>
            <div class="-mx-3 md:flex mb-6">
                <div class="md:w-full px-3">
                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-business-name">
                        Business Name
                    </label>
                    <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3" id="grid-business-name" type="text" name='business_name' placeholder="Registered Business Name">
                </div>
                <div class="md:w-1/3 px-3 mb-6 md:mb-0">
                    <div class="flex justify-between items-center px-2">
                        <label for="business-type" class="uppercase text-sm tracking-wide font-semibold text-grey-darker">
                            Business Type
                        </label>
                    </div>
                    <div class="relative mt-2">
                        <select class="block appearance-none w-full bg-grey-lighter border-b border-grey-light text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none" id="business-type" name="type">
                            <option value="guesthouse">Guest House</option>
                            <option value="hotel">Hotel</option>
                            <option value="inn">Inn</option>
                            <option value="motel">Motel</option>
                            <option value="pensionhouse">Pension House</option>
                        </select>
                    </div>
                </div>
                <div class="md:w-1/3 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-number-of-rooms">
                        Number of rooms
                    </label>
                    <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="grid-number-of-rooms" type="number" name="number_of_rooms" placeholder="20">
                </div>
            </div>
        </fieldset>
        <fieldset>
            <legend class="text-gray-100 uppercase">Owner's Profile</legend>
            <div class="-mx-3 md:flex mb-6">
                <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
                        First Name
                    </label>
                    <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="grid-first-name" type="text" name="first_name" placeholder="Jane">
                </div>
                <div class="md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
                        Last Name
                    </label>
                    <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-last-name" type="text" name="last_name" placeholder="Doe">
                </div>
            </div>
            <div class="-mx-3 md:flex mb-6">
                <div class="md:w-full px-3">
                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-email">
                        Email
                    </label>
                    <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3" id="grid-email" type="email" name='username' placeholder="youremail@example.com">
                </div>
            </div>
            <div class="-mx-3 md:flex mb-6">
                <div class="md:w-full px-3">
                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-password">
                        Password
                    </label>
                    <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3" id="grid-password" type="password" name="password" placeholder="******************">
                </div>
            </div>
            <div class="-mx-3 md:flex mb-6">
                <div class="md:w-full px-3">
                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-password-confirmation">
                        Confirm Password
                    </label>
                    <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3" id="grid-password-confirmation" type="password" name="password_confirmation" placeholder="******************">
                </div>
            </div>
        </fieldset>
        <input type="hidden" name="plan" value="starter">
        <button type="submit" class="bg-black text-white rounded px-2 py-2">Register</button>
    </div>
</form>
<footer class="bg-blue-100">
    <div class="container mx-auto px-6 py-12 text-secondary-500 text-center border-t border-gray-300">
        <p>Copyright © @php echo date('Y'); @endphp <a href="https://codingmatters.today" class="text-secondary-900 font-bold underline">Coding Matters</a>. All rights reserved. | Illustrations by <a href="https://twitter.com/NinaLimpi" class="text-secondary-900 font-bold underline">Katerina Limpitsouni</a></p>
    </div>
</footer>
</body>
</html>
