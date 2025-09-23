<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Jasa extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('M_jasa');
    }


    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('jasa/jasa');

        $this->load->view('templates/footer');
    }

    public function simpan()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'keperluan' => $this->input->post('keperluan'),
            'alamat' => $this->input->post('alamat'),
            'no_wa' => $this->input->post('no_wa')
        ];

        if ($this->M_jasa->simpan($data)) {
            $tokenbot = "8449401122:AAHKlWVGqvWfl03PZmeFxeBfeYgDCCxmXR0";
            $grupid = "-1002974288537";

            // Pastikan nomor WA tidak ada spasi/dash
            $no_wa = preg_replace('/[^0-9]/', '', $data['no_wa']);

            // Jika nomor dimulai dengan 0 ubah jadi +62
            if (substr($no_wa, 0, 1) == '0') {
                $no_wa = '+62' . substr($no_wa, 1);
            } elseif (substr($no_wa, 0, 2) != '62') {
                // Kalau user salah input (tidak pakai 0 atau 62), dipaksa jadi +62
                $no_wa = '+62' . $no_wa;
            } else {
                $no_wa = '+' . $no_wa;
            }

            // Buat link WhatsApp
            $link_wa = "https://wa.me/" . str_replace('+', '', $no_wa);

            $text = "
    📩 *Pesan Baru!*
    👤 Nama  : {$data['nama']}
    📧 Nomor whatsapp : {$link_wa}
    📝 Keperluan : {$data['keperluan']}
    📍 Alamat atau tujuan : {$data['alamat']}
    ";

            // Kirim ke Telegram
            $url = "https://api.telegram.org/bot$tokenbot/sendMessage";
            $params = [
                'chat_id' => $grupid,
                'text' => $text,
                'parse_mode' => 'Markdown'
            ];

            file_get_contents($url . "?" . http_build_query($params));
        }


        echo "<script>
            alert('Pesan berhsil dikirim!, silakan tunggu balasan petugas kami.');
            window.location.href='" . site_url('') . "';
        </script>";
    }
}

/* End of file Jasa.php */
