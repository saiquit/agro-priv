<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Artisan Commands</title>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        button {
            margin: 5px;
            padding: 8px 15px;
            font-size: 14px;
            cursor: pointer;
            border: none;
            background: #007bff;
            color: white;
            border-radius: 5px;
        }

        button:hover {
            background: #0056b3;
        }

        button:disabled {
            background: #ccc;
            cursor: not-allowed;
        }

        #output {
            margin-top: 20px;
            padding: 10px;
            background: #f9f9f9;
            border: 1px solid #ccc;
            white-space: pre-line;
        }

        .category {
            margin-top: 30px;
        }

        .category h2 {
            margin-bottom: 10px;
            color: #333;
        }

        .button-group {
            display: flex;
            flex-wrap: wrap;
        }

        .custom-command {
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            background: #f7f7f7;
            border-radius: 5px;
        }

        .custom-command input {
            padding: 8px;
            font-size: 14px;
            width: calc(100% - 120px);
            margin-right: 10px;
        }

        .custom-command button {
            width: 100px;
        }
    </style>
</head>

<body>
    <h1>Laravel Artisan Commands</h1>
    <p>Select a command to execute or enter a custom command below:</p>

    @php
    $commands = [
    'General' => ['about', 'clear-compiled', 'completion', 'down', 'env', 'help', 'inspire', 'list', 'optimize',
    'serve', 'test', 'tinker', 'up'],
    'Cache' => ['cache:clear', 'cache:forget', 'cache:prune-stale-tags'],
    'Config' => ['config:cache', 'config:clear', 'config:publish', 'config:show'],
    'Database' => ['db:monitor', 'db:seed', 'db:show', 'db:table', 'db:wipe', 'migrate', 'migrate:fresh',
    'migrate:install', 'migrate:refresh', 'migrate:reset', 'migrate:rollback', 'migrate:status'],
    'Queue' => ['queue:clear', 'queue:failed', 'queue:flush', 'queue:forget', 'queue:listen', 'queue:monitor',
    'queue:restart', 'queue:retry', 'queue:retry-batch', 'queue:work'],
    'Route' => ['route:cache', 'route:clear', 'route:list'],
    'Schedule' => ['schedule:clear-cache', 'schedule:interrupt', 'schedule:list', 'schedule:run', 'schedule:test',
    'schedule:work'],
    'View' => ['view:cache', 'view:clear'],
    'Storage' => ['storage:link', 'storage:unlink'],
    'Miscellaneous' => ['key:generate', 'vendor:publish', 'stub:publish']
    ];
    @endphp

    @foreach ($commands as $category => $commandsList)
    <div class="category">
        <h2>{{ $category }}</h2>
        <div class="button-group">
            @foreach ($commandsList as $command)
            <button onclick="runCommand('{{ $command }}')">{{ $command }}</button>
            @endforeach
        </div>
    </div>
    @endforeach

    <div class="custom-command">
        <h2>Custom Command</h2>
        <input type="text" id="customCommandInput" placeholder="Enter a custom Artisan command">
        <button onclick="runCustomCommand()">Run</button>
    </div>

    <div id="output"></div>

    <script>
        function runCommand(command) {
            document.getElementById('output').innerText = `Running command: ${command}...`;
            axios.post('/run-command', { command: command })
                .then(response => {
                    if (response.data.success) {
                        document.getElementById('output').innerText = response.data.message;
                    } else {
                        document.getElementById('output').innerText = 'Error: ' + response.data.message;
                    }
                })
                .catch(error => {
                    document.getElementById('output').innerText = 'Request failed: ' + error.message;
                });
        }

        function runCustomCommand() {
            const command = document.getElementById('customCommandInput').value;
            if (!command) {
                alert('Please enter a command');
                return;
            }

            document.getElementById('output').innerText = `Running custom command: ${command}...`;
            axios.post('/run-command', { command: command })
                .then(response => {
                    if (response.data.success) {
                        document.getElementById('output').innerText = response.data.message;
                    } else {
                        document.getElementById('output').innerText = 'Error: ' + response.data.message;
                    }
                })
                .catch(error => {
                    document.getElementById('output').innerText = 'Request failed: ' + error.message;
                });
        }
    </script>
</body>

</html>