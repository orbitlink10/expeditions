import { cp, mkdir, readFile } from 'node:fs/promises';
import path from 'node:path';
import { fileURLToPath } from 'node:url';

const __filename = fileURLToPath(import.meta.url);
const __dirname = path.dirname(__filename);
const root = path.resolve(__dirname, '..');
const buildDir = path.join(root, 'public', 'build');
const fallbackDir = path.join(root, 'public', 'fallback');
const manifestPath = path.join(buildDir, 'manifest.json');

const manifest = JSON.parse(await readFile(manifestPath, 'utf8'));
const cssEntry = manifest['resources/css/app.css']?.file;
const jsEntry = manifest['resources/js/app.js']?.file;

if (!cssEntry || !jsEntry) {
    throw new Error('Missing app asset entries in Vite manifest.');
}

await mkdir(fallbackDir, { recursive: true });
await cp(path.join(buildDir, cssEntry), path.join(fallbackDir, 'app.css'));
await cp(path.join(buildDir, jsEntry), path.join(fallbackDir, 'app.js'));
