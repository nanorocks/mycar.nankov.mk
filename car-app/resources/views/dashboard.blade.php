<x-app-layout>
    <main>

        <div class="bg-base-200 shadow rounded-xl p-4 mb-6">
            <h2 class="text-lg font-semibold mb-4">Upcoming Services</h2>
            <div class="overflow-x-auto">
              <table class="table table-zebra w-full">
                <thead>
                  <tr>
                    <th>Vehicle</th>
                    <th>Service</th>
                    <th>Date</th>
                    <th>Technician</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Audi A4 #223</td>
                    <td>Oil Change</td>
                    <td>2025-05-12</td>
                    <td>Nikolay Petrov</td>
                    <td><span class="badge badge-info">Scheduled</span></td>
                    <td><button class="btn btn-xs btn-outline">View</button></td>
                  </tr>
                  <tr>
                    <td>Renault Clio #551</td>
                    <td>Brake Check</td>
                    <td>2025-05-14</td>
                    <td>Elena Ivanova</td>
                    <td><span class="badge badge-info">Scheduled</span></td>
                    <td><button class="btn btn-xs btn-outline">View</button></td>
                  </tr>
                  <tr>
                    <td>Skoda Octavia #111</td>
                    <td>Inspection</td>
                    <td>2025-05-15</td>
                    <td>Dimitar Georgiev</td>
                    <td><span class="badge badge-warning">In Progress</span></td>
                    <td><button class="btn btn-xs btn-outline">View</button></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>


        <div class="bg-base-200 shadow rounded-xl p-4">
            <h2 class="text-lg font-semibold mb-4">Vehicles Needing Attention</h2>
            <div class="overflow-x-auto">
              <table class="table table-zebra w-full">
                <thead>
                  <tr>
                    <th>Vehicle</th>
                    <th>Owner</th>
                    <th>Last Service</th>
                    <th>Next Due</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <!-- Overdue -->
                  <tr>
                    <td>VW Golf #341</td>
                    <td>Petar Dimitrov</td>
                    <td>2024-12-01</td>
                    <td class="text-red-500 font-semibold">2025-03-01</td>
                    <td><span class="badge badge-error">Overdue</span></td>
                    <td><button class="btn btn-xs btn-outline btn-error">Schedule</button></td>
                  </tr>
                  <!-- Due Soon -->
                  <tr>
                    <td>Ford Focus #778</td>
                    <td>Maria Koleva</td>
                    <td>2025-02-15</td>
                    <td class="text-yellow-500 font-semibold">2025-05-15</td>
                    <td><span class="badge badge-warning">Due Soon</span></td>
                    <td><button class="btn btn-xs btn-outline btn-warning">Schedule</button></td>
                  </tr>
                  <!-- Overdue -->
                  <tr>
                    <td>BMW X5 #912</td>
                    <td>Ivan Stoyanov</td>
                    <td>2024-11-20</td>
                    <td class="text-red-500 font-semibold">2025-02-20</td>
                    <td><span class="badge badge-error">Overdue</span></td>
                    <td><button class="btn btn-xs btn-outline btn-error">Schedule</button></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>


        <div class="bg-base-200 shadow rounded-xl p-4 mt-6">
            <h2 class="text-lg font-semibold mb-4">Recent Activity</h2>
            <ul class="space-y-4 max-h-80 overflow-y-auto">

              <!-- Activity item -->
              <li class="flex items-start space-x-3">
                <div class="avatar">
                  <div class="w-8 rounded-full">
                    <img src="https://i.pravatar.cc/40?img=1" alt="User Avatar">
                  </div>
                </div>
                <div>
                  <p class="text-sm">
                    <span class="font-medium">Alex Ivanov</span> logged in
                  </p>
                  <p class="text-xs text-gray-500">2 minutes ago</p>
                </div>
              </li>

              <li class="flex items-start space-x-3">
                <div class="avatar">
                  <div class="w-8 rounded-full">
                    <img src="https://i.pravatar.cc/40?img=2" alt="User Avatar">
                  </div>
                </div>
                <div>
                  <p class="text-sm">
                    <span class="font-medium">Maria Petrova</span> edited vehicle <span class="text-blue-500">#12</span>
                  </p>
                  <p class="text-xs text-gray-500">10 minutes ago</p>
                </div>
              </li>

              <li class="flex items-start space-x-3">
                <div class="avatar">
                  <div class="w-8 rounded-full">
                    <img src="https://i.pravatar.cc/40?img=3" alt="User Avatar">
                  </div>
                </div>
                <div>
                  <p class="text-sm">
                    <span class="font-medium">Ivan Georgiev</span> added new service <span class="text-blue-500">#2035</span>
                  </p>
                  <p class="text-xs text-gray-500">30 minutes ago</p>
                </div>
              </li>

            </ul>
          </div>


        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 py-6">

            <!-- Total Vehicles -->
            <div class="stat bg-base-200 shadow rounded-xl p-4">
                <div class="stat-figure text-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-car-icon lucide-car">
                        <path
                            d="M19 17h2c.6 0 1-.4 1-1v-3c0-.9-.7-1.7-1.5-1.9C18.7 10.6 16 10 16 10s-1.3-1.4-2.2-2.3c-.5-.4-1.1-.7-1.8-.7H5c-.6 0-1.1.4-1.4.9l-1.4 2.9A3.7 3.7 0 0 0 2 12v4c0 .6.4 1 1 1h2">
                        </path>
                        <circle cx="7" cy="17" r="2"></circle>
                        <path d="M9 17h6"></path>
                        <circle cx="17" cy="17" r="2"></circle>
                    </svg>
                </div>
                <div class="stat-title">Total Vehicles</div>
                <div class="stat-value">234</div>
                <div class="stat-desc">Registered in system</div>
            </div>

            <!-- Services This Month -->
            <div class="stat bg-base-200 shadow rounded-xl p-4">
                <div class="stat-figure text-secondary">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="40" height="40"
                        class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2">
                        <path
                            d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z">
                        </path>
                    </svg>
                </div>
                <div class="stat-title">Services This Month</div>
                <div class="stat-value">42</div>
                <div class="stat-desc">Completed this month</div>
            </div>

            <!-- Active Users -->
            <div class="stat bg-base-200 shadow rounded-xl p-4">
                <div class="stat-figure text-accent">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="40" height="40"
                        class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                    </svg>
                </div>
                <div class="stat-title">Active Users</div>
                <div class="stat-value">15</div>
                <div class="stat-desc">Technicians online</div>
            </div>

            <!-- Completed vs Pending Services -->
            <div class="stat bg-base-200 shadow rounded-xl p-4">
                <div class="stat-title">Completed vs Pending</div>
                <div class="stat-value">30 / 50</div>
                <div class="stat-desc mb-2">This month’s services</div>
                <progress class="progress progress-success w-full" value="60" max="100"></progress>
            </div>

        </div>


        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Add New Service -->
            <div class="card card-dash bg-base-200 w-full shadow">
                <div class="card-body">
                    <h2 class="card-title flex items-center">
                        <div class="bg-primary text-white p-3 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"
                                class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2">
                                <path
                                    d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z">
                                </path>
                            </svg>
                        </div> Add New Service
                    </h2>
                    <p>Create a maintenance record</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary btn-sm">Add Service</button>
                    </div>
                </div>
            </div>

            <!-- Register New Vehicle -->
            <div class="card card-dash bg-base-200 w-full shadow">
                <div class="card-body">
                    <h2 class="card-title flex items-center">
                        <div class="bg-secondary text-white p-3 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-car-icon lucide-car">
                                <path
                                    d="M19 17h2c.6 0 1-.4 1-1v-3c0-.9-.7-1.7-1.5-1.9C18.7 10.6 16 10 16 10s-1.3-1.4-2.2-2.3c-.5-.4-1.1-.7-1.8-.7H5c-.6 0-1.1.4-1.4.9l-1.4 2.9A3.7 3.7 0 0 0 2 12v4c0 .6.4 1 1 1h2">
                                </path>
                                <circle cx="7" cy="17" r="2"></circle>
                                <path d="M9 17h6"></path>
                                <circle cx="17" cy="17" r="2"></circle>
                            </svg>
                        </div> Register New Vehicle
                    </h2>
                    <p>Add a customer’s car to the system</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-secondary btn-sm">Register</button>
                    </div>
                </div>
            </div>

            <!-- Assign Technician -->
            <div class="card card-dash bg-base-200 w-full shadow">
                <div class="card-body">
                    <h2 class="card-title flex items-center">
                        <div class="bg-accent text-white p-3 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20"
                                height="20" class="main-grid-item-icon" fill="none" stroke="currentColor"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>
                        </div> Assign Technician
                    </h2>
                    <p>Link tech to a work order</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-accent btn-sm">Assign</button>
                    </div>
                </div>
            </div>
        </div>

        <livewire:add-new-vehicle />
        <livewire:vehicles />
    </main>
</x-app-layout>
