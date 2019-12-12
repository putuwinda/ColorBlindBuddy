$(document).ready(function () {

    // Ensure body resizes appropriately
    $('body').css('height', $(window).height());
    $(window).resize(function () {
        $('body').css('height', $(window).height());
    });

    // Connect to Clarifai
    const app = new Clarifai.App({
        apiKey: 'YOUR_API_KEY'
    });

    // Use Clarifai to find the image color scheme
    function getColors(file) {
        app.models.predict(Clarifai.COLOR_MODEL, {base64: file}).then(
            // Response handler
            function (response) {
                // Get colors from response and sort by descending prevalence
                const colors = response.outputs[0].data.colors;
                colors.sort((a, b) => (a.value > b.value) ? -1 : ((b.value > a.value) ? 1 : 0));

                const holder = $('#colors');
                holder.html('');

                for (let i = 0; i < colors.length; i++) {
                    const color = colors[i];

                    // Create new div to hold color information
                    const addition = $.parseHTML(
                        '<div><span>'
                        + color.raw_hex + '</span><span>'
                        + color.w3c.name + '</span><span>'
                        + color.value + '</span></div>'
                    )[0];

                    $(addition).css('background-color', color.raw_hex);
                    if (tinycolor(color.raw_hex).isLight()) $(addition).css('color', 'black');

                    holder.append(addition);
                }
            },
            // Error handler
            function (err) {
                console.error(err);
            }
        );
    }

    // Image upload handler
    $('#upload').change(function () {
        const file = this.files[0];

        const reader = new FileReader();
        reader.readAsDataURL(file);

        reader.onload = function () {
            $('body').css('background-image', 'url("' + reader.result + '")');
            $('#colors').html('<h2>Processing...</h2>');

            getColors(reader.result.substr(reader.result.search('base64,') + 7));
        };

        reader.onerror = function (error) {
            console.error('Error: ', error);
        };

    });

});
