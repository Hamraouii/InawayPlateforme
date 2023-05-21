async function askAssistant(question) {
    const response = await fetch('http://127.0.0.1:5000/askAssistant', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: `question=${encodeURIComponent(question)}`
    });

    if (!response.ok) {
        throw new Error(`HTTP error! status: ${response.status}`);
    }

    const data = await response.json();

    return data.answer;
}