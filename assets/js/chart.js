const ctx = document.getElementById("myChart").getContext("2d");

const gradient = ctx.createLinearGradient(0, 0, ctx.canvas.width, 0);
gradient.addColorStop(0, "#0099f7");
gradient.addColorStop(1, "#f11712");

new Chart(ctx, {
  type: "line",
  data: {
    labels: [
      "Janvier",
      "Fevrier",
      "Mars",
      "Avril",
      "Mais",
      "Juin",
      "juillet",
      "Aout",
      "Septembre",
      "Octobre",
      "Novembre",
      "Decembre",
    ],
    datasets: [
      {
        label: "Nombre de visite",
        data: [12, 86, 3, 5, 62, 73, 20, 100, 42, 5, 59, 96],
        backgroundColor: "#fff",
        borderColor: gradient,
        borderWidth: 2,
        fill: false,
      },
    ],
  },
  options: {
    responsive: true,
    scales: {
      y: {
        beginAtZero: true,
      },
    },
  },
});
