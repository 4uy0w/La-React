import React, { useEffect, useState } from "react";
import { getSiswa, addSiswa, updateSiswa, deleteSiswa } from "./services/siswaService";

function App() {
  const [siswa, setSiswa] = useState([]);
  const [form, setForm] = useState({ nis: "", nama: "", kelas: "", jurusan: "" });
  const [editingId, setEditingId] = useState(null);
  useEffect(() => {
    fetchData();
  }, []);
  const fetchData = () => {
    getSiswa().then((res) => setSiswa(res.data));
  };
  const handleChange = (e) => setForm({ ...form, [e.target.name]: e.target.value });
  const handleSubmit = (e) => {
    e.preventDefault();
    if (editingId) {
      updateSiswa(editingId, form).then(() => {
      fetchData();
      resetForm();
    });
    } else {
      addSiswa(form).then(() => {
        fetchData();
        resetForm();
      });
    }
  };
  const handleEdit = (sw) => {
    setForm({ nis: sw.nis, nama: sw.nama, kelas: sw.kelas, jurusan: sw.jurusan });
    setEditingId(sw.id_siswa);
  };
  const handleDelete = (id) => {
    deleteSiswa(id).then(() => fetchData());
  };
  const resetForm = () => {
    setForm({ nis: "", nama: "", kelas: "", jurusan: "" });
    setEditingId(null);
  };
  return (
      <div className="container mt-4">
        <h2 className="text-center mb-4">Manajemen Data Siswa</h2>{/* FORM INPUT */}
        <div className="card mb-4">
          <div className="card-header bg-primary text-white">
            {editingId ? "Edit Data Siswa" : "Tambah Data Siswa"}
          </div>
          <div className="card-body">
            <form onSubmit={handleSubmit} className="row g-3">
              <div className="col-md-3">
                <input type="text" name="nis" placeholder="NIS" value={form.nis} onChange={handleChange} className="form-control"required/>
              </div>
              <div className="col-md-3">
                <input type="text" name="nama" placeholder="Nama" value={form.nama} onChange={handleChange} className="form-control"required/>
              </div>
              <div className="col-md-2">
                <input type="text" name="kelas" placeholder="Kelas" value={form.kelas} onChange={handleChange} className="form-control" required/>
              </div>
              <div className="col-md-3">
                <input type="text" name="jurusan" placeholder="Jurusan" value={form.jurusan} onChange={handleChange}className="form-control" required/>
              </div>
              <div className="col-md-1 d-grid">
                <button type="submit" className="btn btn-success">{editingId ? "Update" : "Tambah"}</button>
              </div>
              {editingId && (
                <div className="col-md-12 d-grid">
                  <button type="button" className="btn btn-secondary mt-2" onClick={resetForm}>Batal Edit</button>
                </div>
              )}
              </form>
            </div>
          </div>
          <table className="table table-bordered table-striped">
            <thead className="table-dark">
              <tr>
                <th>NIS</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Jurusan</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              {siswa.map((sw) => (
                <tr key={sw.id_siswa}>
                  <td>{sw.nis}</td>
                  <td>{sw.nama}</td>
                  <td>{sw.kelas}</td>
                  <td>{sw.jurusan}</td>
                  <td>
                    <button className="btn btn-primary btn-sm me-2" onClick={() => handleEdit(sw)}>Edit</button>
                    <button className="btn btn-danger btn-sm" onClick={() => handleDelete(sw.id_siswa)}>Hapus</button>
                  </td>
                </tr>
          ))};
              </tbody>
            </table>
          </div>
  );
}

export default App;
