public function myProfil()
{
$data['judul'] = 'Profil Saya';
$user = $this->ModelUser->cekData(['email' => $this->session-
>userdata('email')])->row_array();
foreach ($user as $a) {
$data = [
'image' => $user['image'],
'user' => $user['nama'],
'email' => $user['email'],
'tanggal_input' => $user['tanggal_input'],
];
}
$this->load->view('templates/templates-user/header', $data);
$this->load->view('member/index', $data);
$this->load->view('templates/templates-user/modal');
$this->load->view('templates/templates-user/footer', $data);
}