let user = {
    firstname: "mbarek",
    lastname: "hani",
    email: "mbarek@email.com",
    password: "123456789",
};

async function main() {
    const response = await fetch("script.php", {
        method: "POST",
        headers: {
            "content-type": "application/json; charset=utf-8",
        },
        body: JSON.stringify(user),
    });
    const data = await response.json();
    console.log(data);
}

main();
