<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta id="token" name="token" value="{{ csrf_token() }}">
    <title>Guestbook</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <style>
        body { padding: 2em 0; }
        .error { font-weight: bold; color: red; }
    </style>
</head>

<body class="container">

    <div id="guestbook">
        <form method="POST" v-on="submit: onSubmitForm">

            <div class="form-group">
                <label for="name">
                    Name:
                    <span class="error" v-if="! newMessage.name">*</span>
                </label>
                <input type="text" name="name" id="name" class="form-control" v-model="newMessage.name">
            </div>

            <div class="form-group">
                <label for="message">
                    Message:
                    <span class="error" v-if="! newMessage.message">*</span>
                </label>
                <textarea type="text" name="message" id="message" class="form-control" v-model="newMessage.message"></textarea>
            </div>

            <div class="form-group" v-if="! submitted">
                <button type="submit" class="btn btn-default" v-attr="disabled: errors">
                    Sign Guestbook
                </button>
            </div>

            <div class="alert alert-success" v-if="submitted">Thanks!</div>

        </form>

        <hr>

        <article v-repeat="messages">
            <h3>@{{ name }}</h3>
            <div class="body">@{{ message }}</div>
        </article>
    </div>

    <script src="/js/vendor.js"></script>
    <script src="/js/guestbook.js"></script>
</body>
</html>