<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Form</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="bg-gray-100 py-10 px-4">

  <div class="max-w-xl mx-auto bg-white p-8 rounded-lg shadow-md">
    <h2 class="text-2xl font-bold mb-6 text-gray-800">Contact Us</h2>

    <form id="contactForm" class="space-y-5">
      <div>
        <label class="block text-sm font-medium text-gray-700">Full Name</label>
        <input type="text" name="name" class="w-full border border-gray-300 px-4 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
      </div>

      <div>
        <label class="block text-sm font-medium text-gray-700">Email</label>
        <input type="email" name="email" class="w-full border border-gray-300 px-4 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
      </div>

      <div>
        <label class="block text-sm font-medium text-gray-700">Subject</label>
        <input type="text" name="subject" class="w-full border border-gray-300 px-4 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
      </div>

      <div>
        <label class="block text-sm font-medium text-gray-700">Message</label>
        <textarea name="message" rows="5" class="w-full border border-gray-300 px-4 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-400"></textarea>
      </div>

      <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded">
        Send Message
      </button>
    </form>

    <div id="result" class="mt-4 text-center text-sm"></div>
  </div>

  <script>
    $('#contactForm').on('submit', function (e) {
      e.preventDefault();

      const data = {
        name: $('input[name="name"]').val(),
        email: $('input[name="email"]').val(),
        subject: $('input[name="subject"]').val(),
        message: $('textarea[name="message"]').val()
      };

      $('#result').text('Sending...').removeClass('text-red-500 text-green-500');

      $.ajax({
        url: 'send-mail.php',
        method: 'POST',
        contentType: 'application/json',
        data: JSON.stringify(data),
        success: function (res) {
          if (res.success) {
            $('#result').text('Message sent successfully!').addClass('text-green-500');
            $('#contactForm')[0].reset();
          } else {
            $('#result').text('Error: ' + res.message).addClass('text-red-500');
          }
        },
        error: function () {
          $('#result').text('Something went wrong.').addClass('text-red-500');
        }
      });
    });
  </script>
</body>
</html>
