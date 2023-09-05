select mhs.mhs_nama, tmn.nilai from tb_mahasiswa_nilai tmn 
left join tb_matakuliah mk 
on mk.mk_id = tmn.mk_id
left join tb_mahasiswa mhs
on mhs.mhs_id = tmn.mhs_id where mk.mk_kode = "MK303" order by tmn.nilai desc 