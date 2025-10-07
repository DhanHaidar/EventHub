<template>
    <div class="event-detail-page">
        <!-- Navbar -->
        <NavBar :name="userName" :role="roleId" />

        <!-- Detail Event -->
        <div
            class="d-flex justify-content-center align-items-center flex-column flex-grow-1"
            v-if="event"
        >
            <div class="card event-card shadow-lg">
                <img
                    :src="resolveImageUrl(event.gambar)"
                    alt="Event Image"
                    class="card-img-top"
                />
                <div class="card-body">
                    <h2 class="card-title fw-bold text-center">
                        {{ event.judul }}
                    </h2>
                    <p class="card-text">
                        <strong>Deskripsi:</strong> {{ event.deskripsi }}
                    </p>
                    <p class="card-text">
                        <i class="bi bi-calendar-event me-2"></i>
                        <strong>Tanggal:</strong> {{ event.tanggal }}
                    </p>
                    <p class="card-text">
                        <i class="bi bi-geo-alt me-2"></i>
                        <strong>Lokasi:</strong> {{ event.lokasi }}
                    </p>
                </div>
            </div>
        </div>

        <!-- Loading/Error -->
        <div class="container mt-4 text-center" v-else>
            <p v-if="loading">Memuat data event...</p>
            <p v-if="error" class="text-danger">{{ error }}</p>
        </div>
    </div>
</template>

<script>
import NavBar from "@/components/icons/NavBar.vue";
import axios from "axios";
import router from "@/router";

export default {
    name: "EventDetail",
    components: { NavBar },
    props: ["id"],
    data() {
        return {
            userName: "",
            roleId: "",
            event: null,
            apiUrl: import.meta.env.VITE_API_URL, // ✅ langsung ambil dari env
            loading: true,
            error: null,
        };
    },
    mounted() {
        this.userName = localStorage.getItem("name");
        this.roleId = localStorage.getItem("role_id");

        if (!this.userName) {
            router.push({ name: "login" });
        }

        this.fetchEvent();
    },
    methods: {
        async fetchEvent() {
            try {
                const res = await axios.get(`${this.apiUrl}/api/event`, {
                    headers: {
                        Authorization: `Bearer ${localStorage.getItem(
                            "token"
                        )}`,
                    },
                });
                this.event = res.data.data.find((e) => e.id == this.id);
                if (!this.event) {
                    this.error = "Event tidak ditemukan";
                }
            } catch (err) {
                console.error(err);
                this.error = "Gagal memuat data event";
            } finally {
                this.loading = false;
            }
        },

        // ✅ memastikan URL gambar sesuai domain HTTPS ngrok
        resolveImageUrl(path) {
            if (!path) return "/default-image.jpg";

            // jika path sudah lengkap (mengandung http/https)
            if (path.startsWith("http")) return path;

            // jika hanya nama file atau path storage
            return `${this.apiUrl}/storage/events/${path.replace(
                /^\/?storage\/events\//,
                ""
            )}`;
        },
    },
};
</script>

<style scoped>
/* Background halaman */
.event-detail-page {
    min-height: 100vh;
    background-color: #198754; /* hijau bootstrap */
    display: flex;
    flex-direction: column;
}

/* Card Event */
.event-card {
    max-width: 900px;
    width: 100%;
    border-radius: 16px;
    overflow: hidden;
}

.card-img-top {
    max-height: 400px;
    object-fit: cover;
}
</style>
