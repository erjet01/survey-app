<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Survei Kepuasan</title>
@if(!app()->runningUnitTests())
    @vite('resources/css/app.css')
@endif
</head>
<body class="bg-gray-100 font-sans">

<div class="max-w-md mx-auto mt-20 bg-white p-6 rounded-lg shadow">

    <h2 class="text-2xl font-bold text-center mb-6">Survei Kepuasan</h2>

    <label class="block font-bold">Nama</label>
    <input id="name" class="w-full p-2 border rounded mt-1" />

    <label class="block font-bold mt-3">Rentang Usia</label>
    <select id="age_range" class="w-full p-2 border rounded mt-1">
        <option value="18-25">18-25</option>
        <option value="26-35">26-35</option>
        <option value="36-45">36-45</option>
    </select>

    <label class="block font-bold mt-3">Jenis Kelamin</label>
    <select id="gender" class="w-full p-2 border rounded mt-1">
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
    </select>

    <label class="block font-bold mt-3">Tingkat Kepuasan</label>
    <select id="satisfaction_score" class="w-full p-2 border rounded mt-1">
        <option value="1">1.Sangat Puas</option>
        <option value="2">2.Kurang Puas</option>
        <option value="3">3.Sedikit Puas</option>
        <option value="4">4.Tidak Puas</option>
        <option value="5">5.Kecewa</option>
    </select>

    <label class="block font-bold mt-3">Komentar</label>
    <textarea id="feedback" class="w-full p-2 border rounded mt-1"></textarea>

    <button onclick="kirim()"
        class="w-full bg-green-500 text-white py-2 mt-5 rounded hover:bg-green-600">
        Kirim Survey
    </button>

    <div id="msg" class="text-center mt-3"></div>
</div>

<script>
function kirim() {
    fetch("http://127.0.0.1:8000/api/surveys", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "Accept": "application/json"
        },
        body: JSON.stringify({
            name: document.getElementById("name").value,
            age_range: age_range.value,
            gender: gender.value,
            satisfaction_score: satisfaction_score.value,
            feedback: feedback.value
        })
    })
    .then(res => res.json())
    .then(() => {
        msg.innerHTML = "<span class='text-green-600'>Survey berhasil dikirim</span>";
    })
    .catch(() => {
        msg.innerHTML = "<span class='text-red-600'>Terjadi kesalahan</span>";
    });
}
</script>

</body>
</html>
