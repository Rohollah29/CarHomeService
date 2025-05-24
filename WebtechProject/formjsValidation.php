<!DOCTYPE html>
<html>

<head>
    <title>Registration Form</title>
    <link rel="stylesheet" type="text/css" href="style_formMaking.css">
</head>

<body>
    <h2>Registration Form</h2>
    <form method="POST" autocomplete="on" action="dbinfo.php">

        <fieldset>
            <legend>Register</legend>
            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name" autocomplete="given-name"><br><br>

            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name" autocomplete="family-name"><br><br>

            <label for="father_name">Father's Name:</label>
            <input type="text" id="father_name" name="father_name" autocomplete="off"><br><br>

            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" autocomplete="bday"><br><br>

            <label>Gender:</label>
            <input type="radio" id="male" name="gender" value="Male"> <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="Female"> <label for="female">Female</label><br><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" autocomplete="email"><br><br>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" autocomplete="tel"><br><br>
        </fieldset>

        <fieldset>
            <legend>Address</legend>
            <label for="post_office">Post Office:</label>
            <input type="text" id="post_office" name="post_office" autocomplete="off"><br><br>

            <label for="postal_code">Postal Code:</label>
            <input type="text" id="postal_code" name="postal_code" autocomplete="postal-code"><br><br>

            <label for="thana">Thana:</label>
            <select id="thana" name="thana">
                <option value="">Select Thana</option>
                <option value="Monohardi">Monohardi</option>
                <option value="Shibpur">Shibpur</option>
                <option value="Narsingdi Sadar">Narsingdi Sadar</option>
                <option value="Madhobdi">Madhobdi</option>
            </select><br><br>

            <label for="district">District:</label>
            <select id="district" name="district">
                <option value="">Select District</option>
                <option value="Narsingdi">Narsingdi</option>
                <option value="Narayanganj">Narayanganj</option>
                <option value="Dhaka">Dhaka</option>
                <option value="Gazipur">Gazipur</option>
            </select><br><br>

            <label for="division">Division:</label>
            <select id="division" name="division">
                <option value="">Select Division</option>
                <option value="Dhaka">Dhaka</option>
                <option value="Barishal">Barishal</option>
                <option value="Chattagram">Chattagram</option>
                <option value="Khulna">Khulna</option>
                <option value="Rajshahi">Rajshahi</option>
                <option value="Rangpur">Rangpur</option>
            </select><br><br>

            <label for="current_address">Current Address:</label>
            <input type="text" id="current_address" name="current_address" autocomplete="street-address"><br><br>

            <label for="permanent_address">Permanent Address:</label>
            <input type="text" id="permanent_address" name="permanent_address" autocomplete="street-address"><br><br>
        </fieldset>

        <fieldset>
            <legend>Vehicle</legend>
            <label for="car_brand">Car Brand:</label>
            <select id="car_brand" name="car_brand">
                <option value="">Select Car Brand</option>
                <option value="Toyota">Toyota</option>
                <option value="Volkswagen">Volkswagen</option>
                <option value="Mercedes-Benz">Mercedes-Benz</option>
                <option value="BMW">BMW</option>
                <option value="Ford">Ford</option>
                <option value="General Motors (GM)">General Motors (GM)</option>
                <option value="Honda">Honda</option>
                <option value="Tesla">Tesla</option>
            </select><br><br>

            <label for="license_number">License Number:</label>
            <input type="text" id="license_number" name="license_number"><br><br>

            <label for="car_one_color">Car One Color:</label>
            <select id="car_one_color" name="car_one_color">
                <option value="">Select Color</option>
                <option value="White">White</option>
                <option value="Black">Black</option>
                <option value="Gray">Gray</option>
                <option value="Silver">Silver</option>
                <option value="Blue">Blue</option>
                <option value="Red">Red</option>
            </select><br><br>

            <label for="car_service_count">How many cars do you need to service?</label>
            <input type="number" id="car_service_count" name="car_service_count" min="1"><br><br>

            <p>Note: Our service provider will call you after submitting this form.</p>
            <p>Thank you for taking our service.</p>
        </fieldset>

        <button type="submit"><b>Submit</b></button>
    </form>

    <script>
        document.querySelector("form").addEventListener("submit", function(e) {
            const requiredFields = [{
                    id: "first_name",
                    label: "First Name"
                },
                {
                    id: "last_name",
                    label: "Last Name"
                },
                {
                    id: "father_name",
                    label: "Father's Name"
                },
                {
                    id: "dob",
                    label: "Date of Birth"
                },
                {
                    name: "gender",
                    label: "Gender",
                    type: "radio"
                },
                {
                    id: "email",
                    label: "Email"
                },
                {
                    id: "phone",
                    label: "Phone Number"
                },
                {
                    id: "post_office",
                    label: "Post Office"
                },
                {
                    id: "postal_code",
                    label: "Postal Code"
                },
                {
                    id: "thana",
                    label: "Thana"
                },
                {
                    id: "district",
                    label: "District"
                },
                {
                    id: "division",
                    label: "Division"
                },
                {
                    id: "current_address",
                    label: "Current Address"
                },
                {
                    id: "permanent_address",
                    label: "Permanent Address"
                },
                {
                    id: "car_brand",
                    label: "Car Brand"
                },
                {
                    id: "license_number",
                    label: "License Number"
                },
                {
                    id: "car_one_color",
                    label: "Car One Color"
                },
                {
                    id: "car_service_count",
                    label: "Car Service Count"
                }
            ];

            let errors = [];

            requiredFields.forEach(field => {
                if (field.type === "radio") {
                    if (!document.querySelector(`input[name="${field.name}"]:checked`)) {
                        errors.push(`${field.label} is required.`);
                    }
                } else {
                    const element = document.getElementById(field.id);
                    if (!element || !element.value.trim()) {
                        errors.push(`${field.label} is required.`);
                    }
                }
            });

            if (errors.length > 0) {
                e.preventDefault();
                alert("Please fix the following errors:\n\n" + errors.join("\n"));
            }
        });
    </script>
</body>

</html>