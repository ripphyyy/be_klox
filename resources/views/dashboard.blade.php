<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>

    </x-slot>

    <div class="py-12"></div>

    <!-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="px-4 py-5 bg-white sm:p-6">
                    <p>ini adalah transaksi seluruh items </p>
                    <p>ini adalah transaksi </p>
                    <p>ini adalah user {{$count = DB::table('users')->count();}}</p>
                    <p>ini adalah banyak katalog pada kantin 1 adalah {{$count = \DB::table('products')->where('categories_id','<=', '1')->count();}} items.</p>
                    <div class="px-3 md:px-8">
                        <div class="container mx-auto max-w-full">
                            <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-4 mb-4">
                                <div class="px-4 mb-10">
                                    <div class="w-full bg-white rounded-xl overflow-hdden shadow-md p-4 undefined">
                                        <div class="flex flex-wrap border-b border-gray-200 undefined">
                                            <div class="bg-gradient-to-tr from-pink-500 to-pink-700 -mt-10 mb-4 rounded-xl text-white grid items-center w-24 h-24 py-4 px-4 justify-center shadow-lg-pink mb-0"><span class="material-icons text-white text-3xl leading-none"></span></div>
                                            <div class="w-full pl-4 max-w-full flex-grow flex-1 mb-2 text-right undefined">
                                                <h5 class="text-gray-500 font-light tracking-wide text-base mb-1">Total Transaksi</h5><span class="text-3xl text-gray-900">{{$count = DB::table('transactions')->count();}}</span>
                                            </div>
                                        </div>
                                        <div class="text-sm text-gray-700 pt-4 flex items-center undefined"><span class="material-icons text-green-500 text-base leading-none">arrow_upward</span><span class="text-green-500 ml-1 mr-2">3.48</span><span class="font-light whitespace-nowrap">Since last month</span></div>
                                    </div>
                                </div>
                                <div class="px-4 mb-10">
                                    <div class="w-full bg-white rounded-xl overflow-hdden shadow-md p-4 undefined">
                                        <div class="flex flex-wrap border-b border-gray-200 undefined">
                                            <div class="bg-gradient-to-tr from-orange-500 to-orange-700 -mt-10 mb-4 rounded-xl text-white grid items-center w-24 h-24 py-4 px-4 justify-center shadow-lg-orange mb-0"><span class="material-icons text-white text-3xl leading-none">groups</span></div>
                                            <div class="w-full pl-4 max-w-full flex-grow flex-1 mb-2 text-right undefined">
                                                <h5 class="text-gray-500 font-light tracking-wide text-base mb-1">New Users</h5><span class="text-3xl text-gray-900">2,356</span>
                                            </div>
                                        </div>
                                        <div class="text-sm text-gray-700 pt-4 flex items-center undefined"><span class="material-icons text-red-500 text-base leading-none">arrow_downward</span><span class="text-red-500 ml-1 mr-2">3.48</span><span class="font-light whitespace-nowrap">Since last week</span></div>
                                    </div>
                                </div>
                                <div class="px-4 mb-10">
                                    <div class="w-full bg-white rounded-xl overflow-hdden shadow-md p-4 undefined">
                                        <div class="flex flex-wrap border-b border-gray-200 undefined">
                                            <div class="bg-gradient-to-tr from-purple-500 to-purple-700 -mt-10 mb-4 rounded-xl text-white grid items-center w-24 h-24 py-4 px-4 justify-center shadow-lg-purple mb-0"><span class="material-icons text-white text-3xl leading-none">paid</span></div>
                                            <div class="w-full pl-4 max-w-full flex-grow flex-1 mb-2 text-right undefined">
                                                <h5 class="text-gray-500 font-light tracking-wide text-base mb-1">Sales</h5><span class="text-3xl text-gray-900">924</span>
                                            </div>
                                        </div>
                                        <div class="text-sm text-gray-700 pt-4 flex items-center undefined"><span class="material-icons text-orange-500 text-base leading-none">arrow_downward</span><span class="text-orange-500 ml-1 mr-2">1.10</span><span class="font-light whitespace-nowrap">Since yesterday</span></div>
                                    </div>
                                </div>
                                <div class="px-4 mb-10">
                                    <div class="w-full bg-white rounded-xl overflow-hdden shadow-md p-4 undefined">
                                        <div class="flex flex-wrap border-b border-gray-200 undefined">
                                            <div class="bg-gradient-to-tr from-blue-500 to-blue-700 -mt-10 mb-4 rounded-xl text-white grid items-center w-24 h-24 py-4 px-4 justify-center shadow-lg-blue mb-0"><span class="material-icons text-white text-3xl leading-none">poll</span></div>
                                            <div class="w-full pl-4 max-w-full flex-grow flex-1 mb-2 text-right undefined">
                                                <h5 class="text-gray-500 font-light tracking-wide text-base mb-1">Performance</h5><span class="text-3xl text-gray-900">49,65%</span>
                                            </div>
                                        </div>
                                        <div class="text-sm text-gray-700 pt-4 flex items-center undefined"><span class="material-icons text-green-500 text-base leading-none">arrow_upward</span><span class="text-green-500 ml-1 mr-2">12</span><span class="font-light whitespace-nowrap">Since last month</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div class="py-8">
        <div class="px-3 md:px-8 -mt-24">
            <div class="container mx-auto max-w-full">
                <div class="grid grid-cols-1 xl:grid-cols-4">
                    <div class="xl:col-start-1 xl:col-end-3 px-4 mb-14">
                        <div class="w-full bg-white rounded-xl overflow-hdden shadow-md p-4 undefined">
                            <div class="bg-gradient-to-tr from-blue-500 to-blue-700 -mt-10 mb-4 rounded-xl text-white grid items-center w-full h-24 py-4 px-8 justify-start shadow-lg-orange undefined">
                                <h6 class="uppercase text-gray-200 text-xs font-medium">#1 Report</h6>
                                <h2 class="text-white text-2xl">Jumlah Produk per Kantin</h2>
                            </div>
                            <section>
                                <div class="p-4 undefined">
                                    <canvas class="p-4" id="chartPie"></canvas>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="xl:col-start-3 xl:col-end-5 px-4 mb-14">
                        <div class="w-full bg-white rounded-xl overflow-hdden shadow-md p-4 undefined">
                            <div class="bg-gradient-to-tr from-pink-500 to-pink-700 -mt-10 mb-4 rounded-xl text-white grid items-center w-full h-24 py-4 px-8 justify-start shadow-lg-pink undefined">
                                <h6 class="uppercase text-gray-200 text-xs font-medium">#2 Report</h6>
                                <h2 class="text-white text-2xl">User & Seesion</h2>
                            </div>
                            <div class="p-4 undefined">
                                <canvas class="p-2" id="chartBar"></canvas>
                                <!-- <div class="relative h-96">
                                    <div class="chartjs-size-monitor">
                                        <div class="chartjs-size-monitor-expand">
                                            <div class=""></div>
                                        </div>
                                        <div class="chartjs-size-monitor-shrink">
                                            <div class=""></div>
                                        </div>
                                    </div><canvas id="bar-chart" width="576" height="768" style="display: block; height: 384px; width: 288px;" class="chartjs-render-monitor"></canvas>
                                </div> -->
                                <br>
                                <br>


                                <!--  -->
                                <div class="w-full bg-white rounded-xl overflow-hdden shadow-md p-2 undefined">
                                    <div class="flex flex-wrap border-b border-gray-200 undefined">
                                        <div class="bg-gradient-to-tr from-blue-500 to-pink-700 -mt-10 mb-4 rounded-xl text-white grid items-center w-24 h-24 py-4 px-4 justify-center shadow-lg-gray mb-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
                                            </svg>
                                        </div>

                                        <div class="w-full pl-4 max-w-full flex-grow flex-1 mb-2 text-right undefined">
                                            <h5 class="text-gray-500 font-light tracking-wide text-base mb-1">Pengguna</h5><span class="text-3xl text-gray-900">{{$count = DB::table('sessions')->get()->count();}}</span>
                                        </div>
                                    </div>
                                    <div class="text-sm text-gray-700 pt-4 flex items-center undefined"><span class="font-light whitespace-nowrap">Total dari seluruh Pengguna</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bagian  -->
    <div class="px-3 md:px-8">
        <div class="container mx-auto max-w-full">
            <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-4 mb-4">
                <div class="px-4 mb-10">
                    <div class="w-full bg-white rounded-xl overflow-hdden shadow-md p-4 undefined">
                        <div class="flex flex-wrap border-b border-gray-200 undefined">
                            <div class="bg-gradient-to-tr from-pink-500 to-pink-700 -mt-10 mb-4 rounded-xl text-white grid items-center w-24 h-24 py-4 px-4 justify-center shadow-lg-pink mb-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                </svg>
                            </div>
                            <div class="w-full pl-4 max-w-full flex-grow flex-1 mb-2 text-right undefined">
                                <h5 class="text-gray-500 font-light tracking-wide text-base mb-1">Products</h5><span class="text-3xl text-gray-900">{{$count_products = DB::table('products')->count();}}</span>
                            </div>
                        </div>
                        <div class="text-sm text-gray-700 pt-4 flex items-center undefined"><span class="font-light whitespace-nowrap">Total dari seluruh Products</span></div>
                    </div>
                </div>
                <div class="px-4 mb-10">
                    <div class="w-full bg-white rounded-xl overflow-hdden shadow-md p-4 undefined">
                        <div class="flex flex-wrap border-b border-gray-200 undefined">
                            <div class="bg-gradient-to-tr from-gray-500 to-pink-700 -mt-10 mb-4 rounded-xl text-white grid items-center w-24 h-24 py-4 px-4 justify-center shadow-lg-gray mb-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                                </svg>
                            </div>
                            <div class="w-full pl-4 max-w-full flex-grow flex-1 mb-2 text-right undefined">
                                <h5 class="text-gray-500 font-light tracking-wide text-base mb-1">Category</h5><span class="text-3xl text-gray-900">{{$count = DB::table('product_categories')->count();}}</span>
                            </div>
                        </div>
                        <div class="text-sm text-gray-700 pt-4 flex items-center undefined"><span class="font-light whitespace-nowrap">Total dari seluruh Kategori</span></div>
                    </div>
                </div>
                <div class="px-4 mb-10">
                    <div class="w-full bg-white rounded-xl overflow-hdden shadow-md p-4 undefined">
                        <div class="flex flex-wrap border-b border-gray-200 undefined">
                            <div class="bg-gradient-to-tr from-purple-500 to-purple-700 -mt-10 mb-4 rounded-xl text-white grid items-center w-24 h-24 py-4 px-4 justify-center shadow-lg-purple mb-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                            <div class="w-full pl-4 max-w-full flex-grow flex-1 mb-2 text-right undefined">
                                <h5 class="text-gray-500 font-light tracking-wide text-base mb-1">transactions</h5><span class="text-3xl text-gray-900">{{$count = DB::table('transactions')->count();}}</span>
                            </div>
                        </div>
                        <div class="text-sm text-gray-700 pt-4 flex items-center undefined"><span class="font-light whitespace-nowrap">Total dari seluruh Transaksi</span></div>
                    </div>
                </div>
                <div class="px-4 mb-10">
                    <div class="w-full bg-white rounded-xl overflow-hdden shadow-md p-4 undefined">
                        <div class="flex flex-wrap border-b border-gray-200 undefined">
                            <div class="bg-gradient-to-tr from-blue-500 to-blue-700 -mt-10 mb-4 rounded-xl text-white grid items-center w-24 h-24 py-4 px-4 justify-center shadow-lg-blue mb-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                            </div>
                            <div class="w-full pl-4 max-w-full flex-grow flex-1 mb-2 text-right undefined">
                                <h5 class="text-gray-500 font-light tracking-wide text-base mb-1">Users</h5><span class="text-3xl text-gray-900">{{$count = DB::table('users')->where('roles', '=', 'user')->count();}}</span>
                            </div>
                        </div>
                        <div class="text-sm text-gray-700 pt-4 flex items-center undefined"><span class="font-light whitespace-nowrap">Total dari Users</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="px-3 md:px-8 h-auto">
        <div class="container mx-auto max-w-full">
            <div class="grid grid-cols-1 xl:grid-cols-5">
                <div class="xl:col-start-1 xl:col-end-4 px-4 mb-14">
                    <div class="w-full bg-white rounded-xl overflow-hdden shadow-md p-4 undefined">
                        <div class="bg-gradient-to-tr from-blue-500 to-blue-700 -mt-10 mb-4 rounded-xl text-white grid items-center w-full h-24 py-4 px-8  shadow-lg-blue undefined">
                            <div class="w-full flex items-center justify-between">
                                <h2 class="text-white text-2xl">Page Visits</h2><button class="false flex items-center justify-center gap-1 font-bold outline-none uppercase tracking-wider focus:outline-none focus:shadow-none transition-all duration-300 rounded-lg py-3 px-7 text-sm leading-relaxed bg-transparent undefined" style="padding: 0px;">See More</button>
                            </div>
                        </div>
                        <div class="p-4 undefined">
                            <div class="overflow-x-auto">
                                <table class="items-center w-full bg-transparent border-collapse">
                                    <thead>
                                        <tr>
                                            <th class="px-2 text-teal-500 align-middle border-b border-solid border-gray-200 py-3 text-sm whitespace-nowrap font-light text-left">ID</th>
                                            <th class="px-2 text-teal-500 align-middle border-b border-solid border-gray-200 py-3 text-sm whitespace-nowrap font-light text-left">Name</th>
                                            <th class="px-2 text-teal-500 align-middle border-b border-solid border-gray-200 py-3 text-sm whitespace-nowrap font-light text-left">Salary</th>
                                            <th class="px-2 text-teal-500 align-middle border-b border-solid border-gray-200 py-3 text-sm whitespace-nowrap font-light text-left">Country</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th class="border-b border-gray-200 align-middle font-light text-sm whitespace-nowrap px-2 py-4 text-left">1</th>
                                            <td class="border-b border-gray-200 align-middle font-light text-sm whitespace-nowrap px-2 py-4 text-left">Dakota Rice</td>
                                            <td class="border-b border-gray-200 align-middle font-light text-sm whitespace-nowrap px-2 py-4 text-left">$36,738</td>
                                            <td class="border-b border-gray-200 align-middle font-light text-sm whitespace-nowrap px-2 py-4 text-left">Niger</td>
                                        </tr>
                                        <tr>
                                            <th class="border-b border-gray-200 align-middle font-light text-sm whitespace-nowrap px-2 py-4 text-left">2</th>
                                            <td class="border-b border-gray-200 align-middle font-light text-sm whitespace-nowrap px-2 py-4 text-left">Minerva Hooper</td>
                                            <td class="border-b border-gray-200 align-middle font-light text-sm whitespace-nowrap px-2 py-4 text-left">$23,789</td>
                                            <td class="border-b border-gray-200 align-middle font-light text-sm whitespace-nowrap px-2 py-4 text-left">Curaçao</td>
                                        </tr>
                                        <tr>
                                            <th class="border-b border-gray-200 align-middle font-light text-sm whitespace-nowrap px-2 py-4 text-left">3</th>
                                            <td class="border-b border-gray-200 align-middle font-light text-sm whitespace-nowrap px-2 py-4 text-left">Sage Rodriguez</td>
                                            <td class="border-b border-gray-200 align-middle font-light text-sm whitespace-nowrap px-2 py-4 text-left">$56,142</td>
                                            <td class="border-b border-gray-200 align-middle font-light text-sm whitespace-nowrap px-2 py-4 text-left">Netherlands</td>
                                        </tr>
                                        <tr>
                                            <th class="border-b border-gray-200 align-middle font-light text-sm whitespace-nowrap px-2 py-4 text-left">4</th>
                                            <td class="border-b border-gray-200 align-middle font-light text-sm whitespace-nowrap px-2 py-4 text-left">Philip Chaney</td>
                                            <td class="border-b border-gray-200 align-middle font-light text-sm whitespace-nowrap px-2 py-4 text-left">$38,735</td>
                                            <td class="border-b border-gray-200 align-middle font-light text-sm whitespace-nowrap px-2 py-4 text-left">Korea, South</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="xl:col-start-4 xl:col-end-6 px-4 mb-14">
                    <div class="w-full bg-white rounded-xl overflow-hdden shadow-md p-4 undefined">
                        <div class="bg-gradient-to-tr from-purple-500 to-purple-700 -mt-10 mb-4 rounded-xl text-white grid items-center w-full h-24 py-4 px-8  shadow-lg-purple undefined">
                            <div class="w-full flex items-center justify-between">
                                <h2 class="text-white text-2xl">Social Media</h2><button class="false flex items-center justify-center gap-1 font-bold outline-none uppercase tracking-wider focus:outline-none focus:shadow-none transition-all duration-300 rounded-lg py-3 px-7 text-sm leading-relaxed bg-transparent      undefined" style="padding: 0px;">See More</button>
                            </div>
                        </div>
                        <div class="p-4 undefined">
                            <div class="overflow-x-auto">
                                <table class="items-center w-full bg-transparent border-collapse">
                                    <thead class="thead-light">
                                        <tr>
                                            <th class="px-2 text-purple-500 align-middle border-b border-solid border-gray-200 py-3 text-sm whitespace-nowrap font-light text-left">Referral</th>
                                            <th class="px-2 text-purple-500 align-middle border-b border-solid border-gray-200 py-3 text-sm whitespace-nowrap font-light text-left">Visitors</th>
                                            <th class="px-2 text-purple-500 align-middle border-b border-solid border-gray-200 py-3 text-sm whitespace-nowrap font-light text-left w-56"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th class="border-b border-gray-200 align-middle font-light text-sm whitespace-nowrap px-2 py-4 text-left">Facebook</th>
                                            <td class="border-b border-gray-200 align-middle font-light text-sm whitespace-nowrap px-2 py-4 text-left">1,480</td>
                                            <td class="border-b border-gray-200 align-middle font-light text-sm whitespace-nowrap px-2 py-4 text-left">
                                                <div class="overflow-hidden h-2 flex rounded bg-blue-200">
                                                    <div class="flex justify-center items-center rounded text-xs font-medium bg-blue-500 text-white" style="width: 60%;"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="border-b border-gray-200 align-middle font-light text-sm whitespace-nowrap px-2 py-4 text-left">Google</th>
                                            <td class="border-b border-gray-200 align-middle font-light text-sm whitespace-nowrap px-2 py-4 text-left">4,807</td>
                                            <td class="border-b border-gray-200 align-middle font-light text-sm whitespace-nowrap px-2 py-4 text-left">
                                                <div class="overflow-hidden h-2 flex rounded bg-red-200">
                                                    <div class="flex justify-center items-center rounded text-xs font-medium bg-red-500 text-white" style="width: 80%;"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="border-b border-gray-200 align-middle font-light text-sm whitespace-nowrap px-2 py-4 text-left">Instagram</th>
                                            <td class="border-b border-gray-200 align-middle font-light text-sm whitespace-nowrap px-2 py-4 text-left">3,678</td>
                                            <td class="border-b border-gray-200 align-middle font-light text-sm whitespace-nowrap px-2 py-4 text-left">
                                                <div class="overflow-hidden h-2 flex rounded bg-indigo-200">
                                                    <div class="flex justify-center items-center rounded text-xs font-medium bg-indigo-500 text-white" style="width: 75%;"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="border-b border-gray-200 align-middle font-light text-sm whitespace-nowrap px-2 py-4 text-left">Twitter</th>
                                            <td class="border-b border-gray-200 align-middle font-light text-sm whitespace-nowrap px-2 py-4 text-left">2,645</td>
                                            <td class="border-b border-gray-200 align-middle font-light text-sm whitespace-nowrap px-2 py-4 text-left">
                                                <div class="overflow-hidden h-2 flex rounded bg-light-blue-200">
                                                    <div class="flex justify-center items-center rounded text-xs font-medium bg-light-blue-500 text-white" style="width: 90%;"></div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
</x-app-layout>
<script>
    // piechart

    const dataPie = {
        labels: ["Kantin 1", "Kantin 2", "Kantin 3", "Kantin 4", "Kantin 5", ],
        datasets: [{
            label: "My First Dataset",
            data: [<?php echo json_encode($sukses = DB::table('products')->where('categories_id', '=', '1')->count()); ?>,
                <?php echo json_encode($sukses = DB::table('products')->where('categories_id', '=', '2')->count()); ?>,
                <?php echo json_encode($sukses = DB::table('products')->where('categories_id', '=', '3')->count()); ?>,
                <?php echo json_encode($sukses = DB::table('products')->where('categories_id', '=', '4')->count()); ?>,
                <?php echo json_encode($sukses = DB::table('products')->where('categories_id', '=', '5')->count()); ?>,
            ],
            backgroundColor: [
                "red",
                "blue",
                "yellow",
                "purple",
                "green",
            ],
            hoverOffset: 4,
        }, ],
    };

    const configPie = {
        type: "pie",
        data: dataPie,
        options: {},
    };
    // chartPie.canvas.parentNode.style.height = '128px';

    // bar
    const labelsBarChart = [
        "Sukses",
        "Pending",
        "Cancel",
    ];
    const dataBarChart = {
        labels: labelsBarChart,
        datasets: [{
            label: "Status Pemesanan",
            backgroundColor: "hsl(252, 82.9%, 67.8%)",
            borderColor: "hsl(252, 82.9%, 67.8%)",
            data: [<?php echo json_encode($sukses = DB::table('transactions')->where('status', '=', 'success')->count()); ?>, <?php echo json_encode($sukses = DB::table('transactions')->where('status', '=', 'pending')->count()); ?>, <?php echo json_encode($sukses = DB::table('transactions')->where('status', '=', 'cancelled')->count()); ?>],
        }, ],
    };

    const configBarChart = {
        type: "bar",
        data: dataBarChart,
        options: {},
    };

    var chartBar = new Chart(
        document.getElementById("chartBar"),
        configBarChart
    );

    var chartBar = new Chart(document.getElementById("chartPie"), configPie);
</script>