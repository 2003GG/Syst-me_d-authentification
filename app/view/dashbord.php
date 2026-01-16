<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-gray-100">
    <div class="min-h-screen">
        <!-- Sidebar -->
        <div class="fixed left-0 top-0 w-64 h-full bg-gray-800 border-r border-gray-700 p-4">
            <div class="flex items-center gap-3 mb-8">
                <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center">
                    <span class="text-xl font-bold">D</span>
                </div>
                <span class="text-xl font-semibold">Dashboard</span>
            </div>
            
            <nav class="space-y-2">
                <a href="#" class="flex items-center gap-3 px-4 py-3 bg-blue-600 rounded-lg">
                    <span>📊</span>
                    <span>Overview</span>
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-3 hover:bg-gray-700 rounded-lg transition">
                    <span>📈</span>
                    <span>Analytics</span>
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-3 hover:bg-gray-700 rounded-lg transition">
                    <span>👥</span>
                    <span>Users</span>
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-3 hover:bg-gray-700 rounded-lg transition">
                    <span>⚙️</span>
                    <span>Settings</span>
                </a>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="ml-64 p-8">
            <!-- Header -->
            <div class="flex justify-between items-center mb-8">
                <div>
                    <h1 class="text-3xl font-bold mb-2">Welcome back, User</h1>
                    <p class="text-gray-400">Here's what's happening with your projects today.</p>
                </div>
                <button class="px-4 py-2 bg-blue-600 hover:bg-blue-700 rounded-lg transition">
                    + New Project
                </button>
            </div>

            <!-- Stats Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <div class="bg-gray-800 p-6 rounded-xl border border-gray-700">
                    <div class="flex justify-between items-start mb-4">
                        <div class="w-12 h-12 bg-blue-600 bg-opacity-20 rounded-lg flex items-center justify-center">
                            <span class="text-2xl">💰</span>
                        </div>
                        <span class="text-green-500 text-sm">+12%</span>
                    </div>
                    <h3 class="text-gray-400 text-sm mb-1">Total Revenue</h3>
                    <p class="text-2xl font-bold">$45,231</p>
                </div>

                <div class="bg-gray-800 p-6 rounded-xl border border-gray-700">
                    <div class="flex justify-between items-start mb-4">
                        <div class="w-12 h-12 bg-purple-600 bg-opacity-20 rounded-lg flex items-center justify-center">
                            <span class="text-2xl">👥</span>
                        </div>
                        <span class="text-green-500 text-sm">+8%</span>
                    </div>
                    <h3 class="text-gray-400 text-sm mb-1">Active Users</h3>
                    <p class="text-2xl font-bold">2,834</p>
                </div>

                <div class="bg-gray-800 p-6 rounded-xl border border-gray-700">
                    <div class="flex justify-between items-start mb-4">
                        <div class="w-12 h-12 bg-green-600 bg-opacity-20 rounded-lg flex items-center justify-center">
                            <span class="text-2xl">📦</span>
                        </div>
                        <span class="text-red-500 text-sm">-3%</span>
                    </div>
                    <h3 class="text-gray-400 text-sm mb-1">Total Orders</h3>
                    <p class="text-2xl font-bold">1,423</p>
                </div>

                <div class="bg-gray-800 p-6 rounded-xl border border-gray-700">
                    <div class="flex justify-between items-start mb-4">
                        <div class="w-12 h-12 bg-orange-600 bg-opacity-20 rounded-lg flex items-center justify-center">
                            <span class="text-2xl">⭐</span>
                        </div>
                        <span class="text-green-500 text-sm">+5%</span>
                    </div>
                    <h3 class="text-gray-400 text-sm mb-1">Satisfaction</h3>
                    <p class="text-2xl font-bold">98.5%</p>
                </div>
            </div>

            <!-- Charts Section -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
                <div class="bg-gray-800 p-6 rounded-xl border border-gray-700">
                    <h3 class="text-xl font-semibold mb-4">Revenue Overview</h3>
                    <div class="h-64 flex items-end justify-around gap-2">
                        <div class="flex-1 bg-blue-600 rounded-t" style="height: 60%"></div>
                        <div class="flex-1 bg-blue-600 rounded-t" style="height: 80%"></div>
                        <div class="flex-1 bg-blue-600 rounded-t" style="height: 45%"></div>
                        <div class="flex-1 bg-blue-600 rounded-t" style="height: 90%"></div>
                        <div class="flex-1 bg-blue-600 rounded-t" style="height: 70%"></div>
                        <div class="flex-1 bg-blue-600 rounded-t" style="height: 85%"></div>
                        <div class="flex-1 bg-blue-600 rounded-t" style="height: 95%"></div>
                    </div>
                    <div class="flex justify-around mt-4 text-sm text-gray-400">
                        <span>Mon</span>
                        <span>Tue</span>
                        <span>Wed</span>
                        <span>Thu</span>
                        <span>Fri</span>
                        <span>Sat</span>
                        <span>Sun</span>
                    </div>
                </div>

                <div class="bg-gray-800 p-6 rounded-xl border border-gray-700">
                    <h3 class="text-xl font-semibold mb-4">Recent Activity</h3>
                    <div class="space-y-4">
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center">JD</div>
                            <div class="flex-1">
                                <p class="font-medium">John Doe</p>
                                <p class="text-sm text-gray-400">Created a new project</p>
                            </div>
                            <span class="text-sm text-gray-400">2m ago</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 bg-purple-600 rounded-full flex items-center justify-center">AS</div>
                            <div class="flex-1">
                                <p class="font-medium">Alice Smith</p>
                                <p class="text-sm text-gray-400">Completed a task</p>
                            </div>
                            <span class="text-sm text-gray-400">15m ago</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 bg-green-600 rounded-full flex items-center justify-center">BJ</div>
                            <div class="flex-1">
                                <p class="font-medium">Bob Johnson</p>
                                <p class="text-sm text-gray-400">Updated documentation</p>
                            </div>
                            <span class="text-sm text-gray-400">1h ago</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 bg-orange-600 rounded-full flex items-center justify-center">EM</div>
                            <div class="flex-1">
                                <p class="font-medium">Emma Martinez</p>
                                <p class="text-sm text-gray-400">Added new team member</p>
                            </div>
                            <span class="text-sm text-gray-400">3h ago</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Projects Table -->
            <div class="bg-gray-800 p-6 rounded-xl border border-gray-700">
                <h3 class="text-xl font-semibold mb-4">Recent Projects</h3>
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="border-b border-gray-700">
                                <th class="text-left py-3 px-4 text-gray-400 font-medium">Project</th>
                                <th class="text-left py-3 px-4 text-gray-400 font-medium">Status</th>
                                <th class="text-left py-3 px-4 text-gray-400 font-medium">Progress</th>
                                <th class="text-left py-3 px-4 text-gray-400 font-medium">Due Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-gray-700 hover:bg-gray-750">
                                <td class="py-3 px-4">Website Redesign</td>
                                <td class="py-3 px-4"><span class="px-3 py-1 bg-green-600 bg-opacity-20 text-green-500 rounded-full text-sm">Active</span></td>
                                <td class="py-3 px-4">
                                    <div class="w-full bg-gray-700 rounded-full h-2">
                                        <div class="bg-blue-600 h-2 rounded-full" style="width: 75%"></div>
                                    </div>
                                </td>
                                <td class="py-3 px-4 text-gray-400">Jan 25, 2026</td>
                            </tr>
                            <tr class="border-b border-gray-700 hover:bg-gray-750">
                                <td class="py-3 px-4">Mobile App</td>
                                <td class="py-3 px-4"><span class="px-3 py-1 bg-yellow-600 bg-opacity-20 text-yellow-500 rounded-full text-sm">Pending</span></td>
                                <td class="py-3 px-4">
                                    <div class="w-full bg-gray-700 rounded-full h-2">
                                        <div class="bg-blue-600 h-2 rounded-full" style="width: 45%"></div>
                                    </div>
                                </td>
                                <td class="py-3 px-4 text-gray-400">Feb 10, 2026</td>
                            </tr>
                            <tr class="hover:bg-gray-750">
                                <td class="py-3 px-4">API Integration</td>
                                <td class="py-3 px-4"><span class="px-3 py-1 bg-blue-600 bg-opacity-20 text-blue-500 rounded-full text-sm">In Review</span></td>
                                <td class="py-3 px-4">
                                    <div class="w-full bg-gray-700 rounded-full h-2">
                                        <div class="bg-blue-600 h-2 rounded-full" style="width: 90%"></div>
                                    </div>
                                </td>
                                <td class="py-3 px-4 text-gray-400">Jan 20, 2026</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>