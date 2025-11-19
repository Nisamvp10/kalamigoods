<?= $this->extend('template/layout/main') ?>

<?= $this->section('content') ?>
<div class="row">
    <div class="col-lg-12">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h3 mb-0"><?= $page ?? '' ?></h1>
            <div>
                
            </div>
        </div>
    </div>
</div>

<!-- Statistics Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-4">
    <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-100 transition-all hover:shadow-md">
        <div class="flex items-start justify-between">
            <div>
                <p class="text-gray-500 text-sm">Items / Cards</p>
                <h3 class="text-2xl font-semibold mt-1"><?= $totalCrads ?></h3>
                <div class="flex items-center mt-2">
                    <span class="mr-1 text-green-500">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-up "><polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline><polyline points="16 7 22 7 22 13"></polyline></svg>
                    </span>
                    <span class="text-sm text-green-500">+ <?=$growth;?> %</span>
                    <span class="text-xs text-gray-400 ml-1">from last period</span>
                </div>
            </div>
            <div class="p-3 rounded-full bg-blue-50">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-id-card text-blue-500">
  <rect width="18" height="14" x="3" y="5" rx="2" ry="2" />
  <circle cx="9" cy="10" r="2" />
  <path d="M15 8h2" />
  <path d="M15 12h2" />
  <path d="M8 14h2" />
</svg>

            </div>
        </div>
    </div>
    <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-100 transition-all hover:shadow-md">
        <div class="flex items-start justify-between">
            <div>
                <p class="text-gray-500 text-sm">Total NFC Cards</p>
                <h3 class="text-2xl font-semibold mt-1"><?= $nfcCards ?></h3>
                <div class="flex items-center mt-2">
                    <span class="mr-1 text-green-500">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-up "><polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline><polyline points="16 7 22 7 22 13"></polyline></svg>
                    </span>
                    <!-- <span class="text-sm text-green-500">+12.5%</span>
                    <span class="text-xs text-gray-400 ml-1">from last period</span> -->
                </div>
            </div>
            <div class="p-3 rounded-full bg-blue-50">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users text-green-500"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
            </div>
        </div>
    </div>
    
    <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-100 transition-all hover:shadow-md">
        <div class="flex items-start justify-between">
            <div>
                <p class="text-gray-500 text-sm">Active Cards</p>
                <h3 class="text-2xl font-semibold mt-1"><?= $activeCards ?></h3>
                <div class="flex items-center mt-2">
                    <span class="mr-1 text-green-500">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-dollar-sign text-purple-500"><line x1="12" x2="12" y1="2" y2="22"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                    </span>
                    <span class="text-sm text-green-500">+12.5%</span>
                    <span class="text-xs text-gray-400 ml-1">from last period</span>
                </div>
            </div>
            <div class="p-3 rounded-full bg-blue-50">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-dollar-sign text-purple-500"><line x1="12" x2="12" y1="2" y2="22"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
            </div>
        </div>
    </div>
    
   
</div>

<!-- Task Distribution & Recent Tasks -->


<div class="row">
    <!-- Recent Tasks -->
    <div class="col-lg-12">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">All Cards</h5>
                <a href="<?= base_url('tasks') ?>" class="btn btn-sm btn-outline-primary">View All</a>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                     <table class="min-w-full divide-y divide-gray-200">
                            <thead>
                                <tr>
                                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">URL</th>
                                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Quantity</th>
                                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Expiry Date</th>
                                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Edit</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                            <?php if (empty($myCards)): ?>
                                <tr>
                                    <td colspan="5" class="text-center py-4">No tasks found</td>
                                </tr>
                            <?php else: ?>
                                <?php foreach ($myCards as $card):
                                    $expiryDate = date('Y-m-d',strtotime($card['created_at']));
                                    $today = new DateTime(); 
                                    $expiry = new DateTime($expiryDate);

                                  
                                    $interval = $today->diff($expiry);
                                    $daysLeft = (int)$interval->format('%r%a'); 

                                    $isExpiringSoon = $daysLeft <= 7 && $daysLeft >= 0; 
                                    ?>
                                     <tr class="hover:bg-gray-50">
                                <td class="px-2 py-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <?=$card['logo'] ? 
                                           '<img class="h-9 w-9 rounded-full mr-3" src="'.base_url($card['logo']).'" alt="'.$card['title'].'">'
                                           :   '<div class="h-9 w-9 rounded-full bg-blue-100 flex items-center justify-center mr-3">
                                                <span class="text-blue-600 font-medium">'.substr($card['title'],0,1).'</span>
                                            </div>' ; ?>
                                        
                                        <div class="text-sm font-medium text-gray-900"><?=$card['title'];?></div>
                                    </div>
                                </td>
                                <td class="px-2 py-2 whitespace-nowrap">
                                    <a href="<?=base_url('card/').$card['slug'];?>" target="_blank" class="text-sm text-gray-900 text-capitalize"><?=$card['slug'];?></a>
                                </td>
                                <td class="px-2 py-2 whitespace-nowrap">
                                    <div class="text-sm text-gray-900 text-capitalize"><?=$card['status'];?></div>
                                </td>
                                 <td class="px-2 py-2 whitespace-nowrap">
                                    <div class="text-sm text-gray-900 text-capitalize"><?=$card['quantity'];?></div>
                                </td>
                                <td class="px-2 py-2 whitespace-nowrap">
                                    <div class="text-sm text-gray-900" style="color: <?= $isExpiringSoon ? 'red' : 'black'; ?>;"><?=$expiryDate = date('d-m-Y', strtotime($card['created_at'] . ' +1 year'));;?></div>
                                </td>
                                 <td class="px-2 py-2 whitespace-nowrap text-center text-sm font-medium">
                                    <a href="<?=base_url('clients/info/').encryptor($card['id']);?>" class="text-blue-600 hover:text-blue-800 mr-3">Edit</a>
                                </td>
                              
                             
                                
                            </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- My Tasks & Notifications -->
    
</div>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script>
    // Function to create priority distribution chart
    function createPriorityChart() {
        const options = {
            series: [<?= $highPriorityTasks ?>, <?= $mediumPriorityTasks ?>, <?= $lowPriorityTasks ?>],
            chart: {
                type: 'donut',
                height: 300,
                animations: {
                    enabled: true,
                    easing: 'easeinout',
                    speed: 800,
                    animateGradually: {
                        enabled: true,
                        delay: 150
                    },
                    dynamicAnimation: {
                        enabled: true,
                        speed: 350
                    }
                }
            },
            labels: ['High', 'Medium', 'Low'],
            colors: ['#F44336', '#FFC107', '#4CAF50'],
            legend: {
                position: 'bottom'
            },
            responsive: [{
                breakpoint: 480,
                options: {
                    chart: {
                        height: 250
                    },
                    legend: {
                        position: 'bottom'
                    }
                }
            }],
            plotOptions: {
                pie: {
                    donut: {
                        size: '55%'
                    }
                }
            },
            dataLabels: {
                enabled: true,
                formatter: function(val, opts) {
                    return opts.w.config.series[opts.seriesIndex];
                },
                style: {
                    fontSize: '14px',
                    fontFamily: '-apple-system, BlinkMacSystemFont, "SF Pro Display", "Segoe UI", Roboto',
                    fontWeight: 'bold'
                },
                dropShadow: {
                    enabled: false
                }
            },
            tooltip: {
                y: {
                    formatter: function(val) {
                        return val + ' tasks';
                    }
                }
            }
        };

        const chart = new ApexCharts(document.querySelector("#priority-chart"), options);
        chart.render();
    }
    
    // Function to create status distribution chart
    function createStatusChart() {
    const options = {
        series: [{
            name: 'Tasks',
            data: [<?= $pendingTasks ?>, <?= $inProgressTasks ?>, <?= $completedTasks ?>]
        }],
        chart: {
            type: 'bar',
            height: 300,
            toolbar: { show: false },
            animations: {
                enabled: true,
                easing: 'easeinout',
                speed: 800,
                animateGradually: {
                    enabled: true,
                    delay: 150
                },
                dynamicAnimation: {
                    enabled: true,
                    speed: 350
                }
            }
        },
        plotOptions: {
            bar: {
                borderRadius: 5,
                dataLabels: {
                    position: 'top',
                },
                distributed: true // enables separate colors for each bar
            }
        },
        dataLabels: {
            enabled: true,
            formatter: function (val) {
                return val;
            },
            offsetY: -20,
            style: {
                fontSize: '14px',
                fontFamily: '-apple-system, BlinkMacSystemFont, "SF Pro Display", "Segoe UI", Roboto',
                fontWeight: 'bold',
                colors: ["#304758"]
            }
        },
        xaxis: {
            categories: ['Pending', 'In Progress', 'Completed'],
            position: 'bottom',
            axisBorder: { show: false },
            axisTicks: { show: false },
            crosshairs: {
                fill: {
                    type: 'gradient',
                    gradient: {
                        colorFrom: '#D8E3F0',
                        colorTo: '#BED1E6',
                        stops: [0, 100],
                        opacityFrom: 0.4,
                        opacityTo: 0.5,
                    }
                }
            },
            tooltip: { enabled: true }
        },
        yaxis: {
            axisBorder: { show: false },
            axisTicks: { show: false },
            labels: {
                show: true,
                formatter: function (val) {
                    return val;
                }
            }
        },
        colors: ['#eab308', '#0F52BA', '#4CAF50'], // warning (pending), blue (in progress), green (completed)
        grid: {
            borderColor: '#e0e0e0',
            strokeDashArray: 5,
            xaxis: {
                lines: { show: true }
            },
            yaxis: {
                lines: { show: true }
            }
        }
    };

    const chart = new ApexCharts(document.querySelector("#status-chart"), options);
    chart.render();
}

    
    // Initialize charts when document is ready
    document.addEventListener('DOMContentLoaded', function() {
        createPriorityChart();
        createStatusChart();
    });
</script>
<?= $this->endSection() ?>

<?php
// Helper function to format time ago
function timeAgo($datetime) {
    $timestamp = strtotime($datetime);
    $now = time();
    $diff = $now - $timestamp;
    
    if ($diff < 60) {
        return 'Just now';
    } elseif ($diff < 3600) {
        $mins = floor($diff / 60);
        return $mins . ' min' . ($mins > 1 ? 's' : '') . ' ago';
    } elseif ($diff < 86400) {
        $hours = floor($diff / 3600);
        return $hours . ' hour' . ($hours > 1 ? 's' : '') . ' ago';
    } elseif ($diff < 604800) {
        $days = floor($diff / 86400);
        return $days . ' day' . ($days > 1 ? 's' : '') . ' ago';
    } else {
        return date('M d, Y', $timestamp);
    }
}
?>