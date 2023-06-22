<!DOCTYPE html>
<html>
<head>
    <title>My PHP Pages</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            text-align: left;
            padding: 8px;
            border: 1px solid black;
        }
        th {
            background-color: #ccc;
        }
    </style>
</head>
<body style="text-align: center;">
<h1>compiled Vs interpreted</h1>
<br>
<table>
    <tr>
        <th></th>
        <th>Compiled Languages</th>
        <th>Interpreted Languages</th>
    </tr>
    <tr>
        <td>Compilation</td>
        <td>Code is compiled into machine code before execution</td>
        <td>Code is executed directly without compilation</td>
    </tr>
    <tr>
        <td>Execution Speed</td>
        <td>Faster execution speed as the machine code is directly executed by the computer</td>
        <td>Slower execution speed as the code is executed line by line by the interpreter</td>
    </tr>
    <tr>
        <td>Error Detection</td>
        <td>Errors are detected during compilation</td>
        <td>Errors are detected during runtime, while the code is being executed</td>
    </tr>
    <tr>
        <td>Portability</td>
        <td>The compiled code is platform-specific, so it must be re-compiled for each platform</td>
        <td>The interpreted code is platform-independent</td>
    </tr>
    <tr>
        <td>Debugging</td>
        <td>Debugging is more difficult since the compiled code is not human-readable</td>
        <td>Debugging is easier since the interpreter can display error messages and the code is human-readable</td>
    </tr>
    <tr>
        <td>Examples</td>
        <td>C, C++, Java</td>
        <td>JavaScript, PHP, Python</td>
    </tr>
</table>
<br>
</body>
</html>