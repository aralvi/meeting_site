<!DOCTYPE html>
    <head>

    </head>

    <body>
            <div style="width:100%;">
                <h3>Hi , {{ ucwords($data['name']) }}</h3>
                <p>
                    {{ $data['message'] }}
                </p>
            </div>

    </body>

</html>