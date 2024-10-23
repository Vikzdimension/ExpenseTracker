<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Transactions</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
            table {
                width: 100%;
                border-collapse: collapse;
                text-align: center;
            }

            table tr th, table tr td {
                padding: 5px;
                border: 1px #eee solid;
            }

            tfoot tr th, tfoot tr td {
                font-size: 20px;
            }

            tfoot tr th {
                text-align: right;
            }
        </style>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <script src="" async defer></script>
        <table>
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Check</th>
                    <th>Description</th>
                    <th>Amount</th>
                </tr>
            </thead>
        <tbody>
            <?php if(!empty($transactions)) : ?>
            <?php foreach($transactions as $transaction): ?>
            <tr>
                <td><?= $transaction['date']; ?></td>
                <td><?= $transaction['checkNumber']; ?></td>
                <td><?= $transaction['description']; ?></td>
                <td><?= formatDollerAmount($transaction['amount']); ?></td>
            </tr>
            <?php endforeach ?>
            <?php endif ?>
        </tbody>
        <tfoot>
            <tr>
                <th colspan="3">Total Income:</th>
                    <td><?= formatDollerAmount($totals['totalIncome']); ?></td>
            </tr>
            <tr>
                <th colspan="3">Total Expense:</th>
                    <td><?= formatDollerAmount($totals['totalExpense']); ?></td>
            </tr>
            <tr>
                <th colspan="3">Net Income:</th>
                    <td><?= formatDollerAmount($totals['netTotal']); ?></td>
            </tr>                        
        </tfoot>
        </table>
    </body>
</html>